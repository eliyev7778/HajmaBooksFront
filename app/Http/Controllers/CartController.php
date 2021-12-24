<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Cart;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{


    public function index(Books $books)
    {

        $user = Auth::user()->id;
        $total = 0;
        $data = DB::select("select id, title_$books->lang as title, img_audio, img_front, free, price, discount,
(select name_$books->lang from book_languages where id=bb.languages_id) as lang,
(select top 1 name_$books->lang from book_authors where id in (SELECT author_id from rl_author_books WHERE book_id=bb.id)) as author
from books as bb where id in (select book_id FROM carts where user_id=$user)");
        for ($i = 0; $i < count($data) ?? 0; $i++) {
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
        return view('frontend.cart', compact('data', 'total'));
    }

    public function add_cart(Request $request)
    {
        $add = Cart::firstOrCreate([
            'book_id' => $request->id,
            'user_id' => Auth::user()->id
        ]);
        if (!Auth::user()) {
            return [false, __("book-about.noRegister")];
        }
        if (!$add->wasRecentlyCreated) {
            return [false, __("cart.existCart")];
        }
        return [true, __("cart.addSuccess")];
    }

    public function delete_cart(Request $request)
    {
        Cart::where("book_id", $request->id)->where("user_id", Auth::user()->id)->delete();
        return [true, __("cart.deleteSuccess")];
    }
}
