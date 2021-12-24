<?php

namespace App\Http\Controllers;

use App\Models\Book_authors;
use App\Models\Book_categorys;
use App\Models\Books;
use App\Models\Rl_category_books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(Request $request, Books $book){
       if($request->isMethod('post')){
           $list=$book::select('id','title_'.$book->lang.' as book_name','price','discount','img_front','free')->
           when($request->category!=null,function ($query) use ($request){
               $query->WhereIn('id',function ($q) use ($request){
                   $q->select('book_id')->from('rl_category_books')->where('category_id',$request->category);
                   });
           })->
           when($request->author!=0,function ($query) use ($request){
               $query->WhereIn('id',function ($q) use ($request){
                   $q->select('book_id')->from('rl_author_books')->where('author_id',$request->author);
               });
           })->
               when($request->year!=0,function ($query) use ($request){
                   $query->where('year',$request->year);
           })->
           whereNotNull('img_front')->orderBy('id','desc')->paginate(50);
       }else{
           $list=$book::select('id','title_'.$book->lang.' as book_name','price','discount','img_front','free')->whereNotNull('img_front')->orderBy('id','desc')->paginate(25);
       }
        $data=[];
        for ($i=0; $i<count($list) ?? 0; $i++){
            $category=Rl_category_books::select("bc.name_$book->lang as categorys")
                ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                ->where("rl_category_books.book_id",$list[$i]['id'])->get();
            $data[$i]=["books"=>$list[$i],"category"=>$category];
        }
        $author=Book_authors::orderByDesc('id')->get(['id','name_'.$book->lang." as author"]);
        $year=$book::whereNotNull('year')->distinct('year')->get('year');
        $category=Book_categorys::all(['id','name_'.$book->lang." as category"]);
       return view('frontend.books',compact('data','list','author','year','category'));


    }

    public function audio_books(Request $request, Books $book){
        if($request->isMethod('post')){
            $list=$book::select('id','title_'.$book->lang.' as book_name','price','discount','img_front','img_audio','free')->
            when($request->category!=null,function ($query) use ($request){
                $query->WhereIn('id',function ($q) use ($request){
                    $q->select('book_id')->from('rl_category_books')->where('category_id',$request->category);
                });
            })->
            when($request->author!=0,function ($query) use ($request){
                $query->WhereIn('id',function ($q) use ($request){
                    $q->select('book_id')->from('rl_author_books')->where('author_id',$request->author);
                });
            })->
            when($request->year!=0,function ($query) use ($request){
                $query->where('year',$request->year);
            })->
            whereNotNull('img_audio')->orderBy('id','desc')->paginate(50);
        }else{
            $list=$book::select('id','title_'.$book->lang.' as book_name','price','discount','img_front','img_audio','free')->whereNotNull('img_audio')->orderBy('id','desc')->paginate(25);
        }
        $data=[];
        for ($i=0; $i<count($list) ?? 0; $i++){
            $category=Rl_category_books::select("bc.name_$book->lang as categorys")
                ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                ->where("rl_category_books.book_id",$list[$i]['id'])->get();
            $data[$i]=["books"=>$list[$i],"category"=>$category];
        }
        $author=Book_authors::orderByDesc('id')->get(['id','name_'.$book->lang." as author"]);
        $year=$book::whereNotNull('year')->distinct('year')->get('year');
        $category=Book_categorys::all(['id','name_'.$book->lang." as category"]);
        return view('frontend.audio-books',compact('data','list','author','year','category'));
    }
}
