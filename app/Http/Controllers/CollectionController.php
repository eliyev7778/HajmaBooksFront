<?php

namespace App\Http\Controllers;

use App\Models\Book_collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CollectionController extends Controller
{
    public function index(){
        $lang=Config::get('app.locale');
        $data=Book_collections::orderByDesc('id')->get(['id','img_vertical','name_'.$lang.' as name']);
        return view('frontend.collections',compact('data'));
    }
}
