<?php

namespace App\Http\Controllers;

use App\Models\Book_collections;
use App\Models\Books;
use App\Models\Rl_category_books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CollectionController extends Controller
{
    public $lang;

    public function __construct()
    {
        $this->lang=Config::get('app.locale');
    }
    public function index(){

        $data=Book_collections::orderByDesc('id')->get(['id','img_vertical','name_'.$this->lang.' as name','slug_'.$this->lang.' as slug']);
        return view('frontend.collections',compact('data'));
    }
    public function collection($slug){
        $id=Book_collections::where('slug_az',$slug)->orWhere('slug_tr',$slug)->orWhere('slug_en',$slug)->orWhere('slug_ru',$slug)->orWhere('slug_uk',$slug)
            ->first(['id','name_'.$this->lang.' as category']);
        $data=[];
        $books=Books::select('id','title_'.$this->lang.' as book_name','price','discount','free','img_front','img_audio')->whereIn('id',function ($query) use ($id){
            $query->select('book_id')->from('rl_category_books')->where('category_id',$id->id);
        })->paginate(25);
        for ($i=0; $i<count($books) ?? 0; $i++){
            $category=Rl_category_books::select("bc.name_$this->lang as categorys")
                ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                ->where("rl_category_books.book_id",$books[$i]['id'])->get();
            $data[$i]=["books"=>$books[$i],"category"=>$category];
        }
        return view('frontend.collection',compact('data','id','books'));
    }
}
