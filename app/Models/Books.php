<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Books extends Model
{

    use HasFactory;
    protected $guarded = ['id'];
    public $lang;

    public function __construct()
    {
        $this->lang=\Config::get('app.locale');
    }
    public function index_special(){
           $array_data=[];
           $special=Books::whereNotNull('discount')->limit(4)->get(['id','title_'.$this->lang.' as book_name','price','discount']);
           for ($i=0; $i<count($special); $i++){
                $category=Rl_category_books::select("bc.name_$this->lang as categorys")
                    ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                    ->where("rl_category_books.book_id",$special[$i]['id'])->get();
               $array_data[$i]=["books"=>$special[$i],"category"=>$category];
           }
           return $array_data;
    }
    public function best_sold(){
        $array_data=[];
        $special=Books::whereNotNull('price')->orderBy('sold','desc')->limit(4)
            ->get(['id','title_'.$this->lang.' as book_name','price','discount','img_front','img_audio']);
        for ($i=0; $i<count($special); $i++){
            $category=Rl_category_books::select("bc.name_$this->lang as categorys")
                ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                ->where("rl_category_books.book_id",$special[$i]['id'])->get();
            $array_data[$i]=["books"=>$special[$i],"category"=>$category];
        }
        return $array_data;
    }

    public function new_books(){
        $array_data=[];
        $special=Books::whereNotNull('price')->orderBy('id','desc')->limit(5)
            ->get(['id','title_'.$this->lang.' as book_name','price','discount','img_front','img_audio']);
        for ($i=0; $i<count($special); $i++){
            $category=Rl_category_books::select("bc.name_$this->lang as categorys")
                ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                ->where("rl_category_books.book_id",$special[$i]['id'])->get();
            $array_data[$i]=["books"=>$special[$i],"category"=>$category];
        }
        return $array_data;
    }
    public function random_books($limit){
        $array_data=[];
        $special=Books::inRandomOrder()->limit($limit)
            ->get(['id','title_'.$this->lang.' as book_name','price','discount','img_front','img_audio','free']);
        for ($i=0; $i<count($special); $i++){
            $category=Rl_category_books::select("bc.name_$this->lang as categorys")
                ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                ->where("rl_category_books.book_id",$special[$i]['id'])->get();
            $array_data[$i]=["books"=>$special[$i],"category"=>$category];
        }
        return $array_data;
    }
    public function costly_books(){
        $array_data=[];
        $special=Books::whereNotNull('price')->WhereNotNull('discount')->WhereNull('img_audio')->orderBy('discount','desc')->limit(3)
            ->get(['id','title_'.$this->lang.' as book_name','price','discount','img_front']);
        for ($i=0; $i<count($special); $i++){
            $category=Rl_author_books::select("ba.name_$this->lang as author")
                ->leftJoin("book_authors as ba", "ba.id", "=", "rl_author_books.author_id")
                ->where("rl_author_books.book_id",$special[$i]['id'])->get();
            $array_data[$i]=["books"=>$special[$i],"category"=>$category];
        }
        return $array_data;
    }
    public function audio_books(){
        $array_data=[];
        $special=Books::whereNotNull('img_audio')->whereNotNull('price')->orderBy('id','desc')->limit(5)
            ->get(['id','title_'.$this->lang.' as book_name','price','discount','img_front','img_audio']);
        for ($i=0; $i<count($special); $i++){
            $category=Rl_category_books::select("bc.name_$this->lang as categorys")
                ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                ->where("rl_category_books.book_id",$special[$i]['id'])->get();
            $array_data[$i]=["books"=>$special[$i],"category"=>$category];
        }
        return $array_data;
    }
    public function free_books(){
        $array_data=[];
        $special=Books::where('free',1)->orderBy('id','desc')->limit(5)
            ->get(['id','title_'.$this->lang.' as book_name','price','discount','img_front','img_audio','free']);
        for ($i=0; $i<count($special); $i++){
            $category=Rl_category_books::select("bc.name_$this->lang as categorys")
                ->leftJoin("book_categorys as bc", "bc.id", "=", "rl_category_books.category_id")
                ->where("rl_category_books.book_id",$special[$i]['id'])->get();
            $array_data[$i]=["books"=>$special[$i],"category"=>$category];
        }
        return $array_data;
    }
    public function category(){
        $data=DB::select("SELECT category_id, count(book_id) as items,
       (select name_{$this->lang} from book_categorys where id=rcb.category_id) as category_name,
	   (select slug_{$this->lang} from category_slugs where category_id=rcb.category_id) as slug
	   FROM rl_category_books as rcb group by category_id");
        return $data;
    }
     public function single_book_categorys($id){
         $data=Rl_category_books::select(['bc.name_'.$this->lang.' as category_name'])->leftJoin('book_categorys as bc', 'bc.id','=','rl_category_books.category_id')
             ->where('rl_category_books.book_id',$id)->get();
         return $data;
     }

     public function discount(){
             $data=Books::select('books.title_'.$this->lang.' as title','books.img_front','books.img_audio','books.id','books.price','dc.price as dcprice')
                 ->rightJoin("discounts as dc",'dc.book_id','=','books.id')
             ->get();
            return $data;
     }
    public function slug($id){
       $data=BookSlug::select('slug_'.$this->lang.' as slug')->where('book_id',$id)->first();
       return $data->slug;
    }

    public function star($id){
        $star=Star::select(DB::raw("SUM(score) as su, count(book_id) as dd"))->where("book_id",$id)->first();
        return $star->su>0 ? round($star->su/$star->dd,2) : 0;
    }
}
