<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index(Request  $request){
        Subscriber::insert([
           'email'=>$request->email
        ]);
        return back()->with('success',__('index.SuccessSubscriber'));
    }
}
