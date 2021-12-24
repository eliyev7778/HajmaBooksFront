<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Cart;
use App\Models\Discount;
use App\Models\ReceivedBook;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Stripe;
use Stripe\Exception\ApiConnectionException;
use Stripe\Exception\ApiErrorException;
use Stripe\Exception\CardException;
use Stripe\Exception\OAuth\InvalidRequestException;
use Stripe\Exception\RateLimitException;

class PaymentController extends Controller
{
    public function index(){
        $user = Auth::user()->id;
        $total = 0;
        $data = DB::select("select id, free, price, discount from books as bb where id in (select book_id FROM carts where user_id=$user)");
        if(!$data){return back()->with("error",__('cart.noBook'));}

        for ($i = 0; $i < count($data); $i++) {
            $dis = Discount::where('book_id', $data[$i]->id)->first();
            if (isset($dis)) {
                $data[$i]->price = $dis->price;
            } else {
                if (!is_null($data[$i]->discount)) {
                    $data[$i]->price = $data[$i]->discount;
                }
            }
            $total += $data[$i]->price;
        }
        if ($total==0){
           foreach ($data as $key){
               ReceivedBook::insert([
                  'user_id'=>$user,
                  'book_id'=>$key->id,
                  'price'=>null
               ]);
           }
           Cart::where('user_id',$user)->delete();
           return redirect(route('dashboard'))->with('success',__("cart.paySuccess"));
        }else{
            session()->put('paymentTotal',$total);
            return view('frontend.stripe',compact('total'));
        }

    }

    public function stripe_post(Request $request){
        if (session()->get('paymentTotal')!=base64_decode($request->token)) return back()->with("error",__('cart.paymentError'));
        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
           $reply=Stripe\Charge::create([
                "amount" => (int)base64_decode($request->token) * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Buy books, Hajmabooks.com"
            ]);
        }catch (CardException $e) {
            return back()->with("error",__('cart.noMoney'));
        } catch (RateLimitException $e) {
            return back()->with("error",__('cart.paymentError'));
        } catch (InvalidRequestException $e) {
            return back()->with("error",__('cart.paymentError'));
        } catch (AuthenticationException $e) {
            return back()->with("error",__('cart.paymentError'));
        } catch (ApiConnectionException $e) {
            return back()->with("error",__('cart.paymentError'));
        } catch (ApiErrorException $e) {
            return back()->with("error",__('cart.paymentError'));
        } catch (\Exception $e) {
            return back()->with("error",__('cart.paymentError'));
        }if ($reply['amount_refunded'] == 0 && empty($reply['failure_code']) && $reply['paid'] == 1 && $reply['captured'] == 1
            && $reply['status'] == 'succeeded') {
            $user = Auth::user()->id;
            $data = DB::select("select id, free, price, sold, discount from books as bb where id in (select book_id FROM carts where user_id=$user)");

            for ($i = 0; $i < count($data); $i++) {
                if ($data[$i]->free==1){
                    $data[$i]->price =null;
                }else{
                    $dis = Discount::where('book_id', $data[$i]->id)->first();
                    if (isset($dis)) {
                        $data[$i]->price = $dis->price;
                    } else {
                        if (!is_null($data[$i]->discount)) {
                            $data[$i]->price = $data[$i]->discount;
                        }
                    }
                }
                Books::where('id',$data[$i]->id)->update(['sold'=>$data[$i]->sold+1]);
                ReceivedBook::insert([
                   'book_id'=>$data[$i]->id,
                   'user_id'=>$user,
                   'price'=>$data[$i]->price
                ]);
            }
            Cart::where('user_id', $user)->delete();
            return redirect(route('dashboard'))->with("success",__('cart.paySuccess'));
        }
             return back()->with("error",__('cart.paymentError'));
    }
}
