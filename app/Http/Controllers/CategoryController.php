<?php

namespace App\Http\Controllers;

use App\Models\Rl_category_books;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug){
        $lang=\Config::get('app.locale');
       $data=Rl_category_books::select(['bc.name_'.$lang.' as category_name','bb.title_'.$lang.' as book_name'
           ,'bb.img_front','bb.img_audio','bb.price','bb.discount','bb.id'])
           ->leftJoin('books as bb','bb.id','=','rl_category_books.book_id')
           ->leftJoin('book_categorys as bc','bc.id','=','rl_category_books.category_id')
           ->leftJoin('category_slugs as cs','cs.category_id','=','bc.id')
           ->leftJoin('book_slugs as bs','bs.book_id','=','bb.id')
           ->where('cs.slug_az',$slug)->orWhere('cs.slug_en',$slug)->orWhere('cs.slug_ru',$slug)->orWhere('cs.slug_tr',$slug)->orWhere('cs.slug_uk',$slug)
            ->paginate(20);

           return view('frontend.category',compact('data'));
    }
}
