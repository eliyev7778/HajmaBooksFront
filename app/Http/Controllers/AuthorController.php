<?php

namespace App\Http\Controllers;

use App\Models\Book_authors;
use App\Models\Books;
use App\Models\Rl_category_books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AuthorController extends Controller
{
    public $lang;

    public function __construct()
    {
        $this->lang=Config::get('app.locale');
    }
    public function index(){
        $author=Book_authors::orderByDesc('id')->get(['slug_'.$this->lang.' as slug','img','name_'.$this->lang.' as name']);
        return view('frontend.authors',compact('author'));
    }
    public function author($slug){
      $author=Book_authors::select('id','name_'.$this->lang.' as name','img')->where('slug_az',$slug)->orWhere('slug_tr',$slug)->orWhere('slug_ru',$slug)->orWhere('slug_en',$slug)->orWhere('slug_uk',$slug)->first();
        $data=[];
        $books=Books::select('id','title_'.$this->lang.' as book_name','price','discount','free','img_front','img_audio')->whereIn('id',function ($query) use ($author){
            $query->select('book_id')->from('rl_author_books')->where('author_id',$author->id);
        })->get();
        for ($i=0; $i<count($books); $i++){
            $category=Rl_category_books::select("bc.name_$this->lang as categorys")
                ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                ->where("rl_category_books.book_id",$books[$i]['id'])->get();
            $data[$i]=["books"=>$books[$i],"category"=>$category];
        }
        return view('frontend.author',compact('data','author'));
    }
}
