<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{
    public $lang;

    public function __construct()
    {
        $this->lang=Config::get('app.locale');
    }
    public function index(){
        $data=Contact::first(['email','tel','address']);
        return view('frontend.contact',compact('data'));
    }
    public function send_offer(Request  $request){

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3|email',
            'contents' => 'required|min:3',
            'message' => 'required|min:3',
        ]);
        Offers::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'content'=>$request->contents,
            'message'=>$request->message
        ]);
        return back()->with('success',__('contact.successFeedback'));
    }
}
