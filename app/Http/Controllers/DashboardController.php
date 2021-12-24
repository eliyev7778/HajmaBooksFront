<?php

namespace App\Http\Controllers;

use App\Models\ReceivedBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public $lang;

    public function __construct()
    {
        $this->lang=\Config::get('app.locale');
    }
    public function index(){
        $myBook=ReceivedBook::select("bb.id","bb.title_$this->lang as title","bb.img_front","bb.img_audio")->
        leftJoin("books as bb","bb.id","=","received_books.book_id")->distinct('bb.id')->where("received_books.user_id",Auth::user()->id)->get();
        return view('frontend.dashboard',compact('myBook'));
    }
    public function profile(){
        return view('frontend.edit-user');
    }
    public function editProfile(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'surname'=>'required|min:3',
            'email'=>'required|email'
        ]);
        if ($request->hasFile('image')){
            $img = uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('storage/users'), $img);
            $url_img = asset(\Storage::url("users/" . $img));
            User::where('id',Auth::user()->id)->update([
                'img'=>$url_img
            ]);
        }
        if ($request->password!=null){
            User::where('id',Auth::user()->id)->update([
               'password'=>Hash::make($request->password)
            ]);
        }
        User::where('id',Auth::user()->id)->update([
            'name'=>$request->name." ".$request->surname,
            'email'=>$request->email
        ]);

        return redirect(route('dashboard'))->with('success',__("dashboard.editSuccess"));
    }
}
