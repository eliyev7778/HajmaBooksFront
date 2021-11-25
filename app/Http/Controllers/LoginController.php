<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        if (\Auth::user()) {
            return redirect(route('index'));
        }
        return view('layouts.login');
    }
    public function post_login(Request $request){
        if (auth()->attempt(['email' => $request->email, 'password' => $request->pass], true))
        {
            return true;

        }else{
            return false;
        }
    }
    public function post_register(Request $request){
        $user = User::firstOrCreate([
            'email' => $request->email
        ], [
            'name' => $request->name.' '.$request->surname,
            'password' =>Hash::make($request->pass),
            'status'=>0,
            'img'=>asset(\Storage::url("user.png"))
        ]);
        if ($user->wasRecentlyCreated){
            return true;
        }
           return false;
    }
    public function post_search(Request $request){
         $search='%'.$request->search.'%';
         $data=Books::where('books.title_az', 'LIKE',$search)->orWhere('books.title_en', 'LIKE',$search)->orWhere('books.title_ru', 'LIKE',$search)
             ->orWhere('books.title_tr', 'LIKE',$search)->orWhere('books.title_uk', 'LIKE',$search)
             ->limit(10)->get(['id','title_'.\Config::get('app.locale').' as book_name','price','discount','img_front','img_audio']);
         return response()->json($data);
    }
}
