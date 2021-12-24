<?php

namespace App\Http\Controllers;

use App\Models\Book_categorys;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(Books $book){

        $special=$book->index_special();
        $best_sold=$book->best_sold();
        $best_book=$book->orderBy('see','desc')->limit(10)->get(['id','img_front','img_audio']);
        $advice=$book->orderBy('see','desc')->skip(0)->limit(10)->get(['id','img_front','img_audio']);
        $new_book=$book->new_books();
        $costly_books=$book->costly_books();
        $category_list=$book->category();
        $audio_books=$book->audio_books();
        $free_books=$book->free_books();
        $total_info=DB::select("SELECT count(id) as total_book, (select count(id) from users) as total_user,
       (select count(id) from book_categorys) as total_category, (select count(id) from book_authors) as total_author FROM books");
        $discount=$book->discount();
        return view('frontend.index',compact('special','best_sold','best_book','advice','category_list','new_book','costly_books',
            'audio_books','free_books','total_info','discount'));
    }
}
