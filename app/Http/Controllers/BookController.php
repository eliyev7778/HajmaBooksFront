<?php

namespace App\Http\Controllers;

use App\Models\BookAudio;
use App\Models\BookEpub;
use App\Models\BookHtml;
use App\Models\Books;
use App\Models\BookSlug;
use App\Models\Discount;
use App\Models\Like;
use App\Models\ReceivedBook;
use App\Models\Rl_category_books;
use App\Models\Star;
use App\Models\UserComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{

    public function index($slug, Books $book){

        $id=BookSlug::where('slug_az',$slug)->orWhere('slug_en',$slug)->orWhere('slug_ru',$slug)->orWhere('slug_tr',$slug)->orWhere('slug_uk',$slug)->first('id');

        $book=$book::select('books.id','books.title_'.$book->lang.' as title','books.img_front','books.img_audio',
            'books.pages','books.year','books.sold','books.price','books.discount','books.see','books.like','books.free',
            'bs.img as seller_img','bs.name_'.$book->lang.' as seller_name',
        DB::raw("(select name_{$book->lang} from book_languages where id=books.languages_id) as lang"),
        DB::raw("(select name from users where id=books.user_id) as user_name"),
        DB::raw("(select content_{$book->lang} from book_contents where book_id=books.id) as content"),
        DB::raw("(SELECT top 1 ba.img  FROM rl_author_books as rab LEFT JOIN book_authors as ba on ba.id=rab.author_id where rab.book_id=books.id) as author_img"),
        DB::raw("(SELECT top 1  ba.name_{$book->lang}  FROM rl_author_books as rab LEFT JOIN book_authors as ba on ba.id=rab.author_id where rab.book_id=books.id) as author_name"),
        DB::raw("(select top 1 title_{$book->lang} from ceo_keys where book_id=books.id) as tags"))
            ->leftJoin('book_sellers as bs','bs.id','=','books.seller_id')->where('books.id',$id->id)->first();

        Books::where('id',$id->id)->update(['see'=>$book->see+1]);
        $comments=UserComment::select("user_comments.*", "users.img as user_img", "users.name as user_name")->
        leftJoin("users","users.id","=","user_comments.user_id")->where('book_id',$id->id)->orderByDesc('id')->get();
        $star=Star::select(DB::raw("SUM(score) as su, count(book_id) as dd"))->where("book_id",$id->id)->first();
        $userStar=Star::where('book_id',$id->id)->where('user_id',Auth::user()->id ?? 0)->first();
        $thisSimilar=DB::select("SELECT DISTINCT TOP 5 b.id, b.title_$book->lang as title, b.img_front, b.img_audio, b.see, b.free, b.price, b.discount
       FROM books b left join rl_category_books as rcb on rcb.book_id=b.id  where rcb.category_id in (select category_id from rl_category_books where book_id=$id->id) and b.id!=$id->id");
         $was=ReceivedBook::where('book_id',$book->id)->where('user_id',Auth::user()->id ?? 0)->first();
         $audio=null;
         $html=null;
         $epub=null;
         $discount=null;
         $getDiscount=Discount::where('book_id',$book->id)->first();
         if ($getDiscount && $book->free!=1){
             $discount=true;
             $book->price=$getDiscount->price;
         }
         if ($was){
            $audio=BookAudio::where('book_id',$was->book_id)->orderBy('file_row')->get();
            $html=BookHtml::where('book_id',$was->book_id)->first();
            $epub=BookEpub::where('book_id',$was->book_id)->first();
         }

        return view('frontend.book-about',compact('book','comments','star','userStar','thisSimilar','audio','html','epub','discount'));
    }

    public function post_comment(Request $request){
        if ($request->user==0){
            return [false,__("book-about.noRegister")];
        }elseif (trim($request->comment)==""){
            return [false,__("book-about.noComment")];
        }
        UserComment::insert([
           'user_id'=>Auth::user()->id,
            'book_id'=>$request->book,
            'comment'=>$request->comment
        ]);
        return [true,__("book-about.successComment")];
    }
    public function delete_comment(Request $request){
        if (Auth::user() && (Auth::user()->status==1 || Auth::user()->status==2)){
            UserComment::where('id',$request->id)->delete();
            return "Məlumat Silindi";
        }
        return back();
    }

    public function like_book(Request $request){
        if (!Auth::user()){
            return [false,__("book-about.noRegister")];
        }
        $like = Like::firstOrCreate([
            'book_id' => $request->id,
            'user_id'=>Auth::user()->id
        ]);
        if(!$like->wasRecentlyCreated){
            return [false,__("book-about.existLike")];
        }
        $like=Books::where('id',$request->id)->first('like');
        Books::where('id',$request->id)->update(['like'=>$like->like+1]);
        return [true,__("book-about.successLike")];
    }

    public function star_book(Request $request){
        if (!Auth::user()){
            return [false,__("book-about.noRegister")];
        }
        Star::updateOrCreate(
            ['book_id' => $request->book_id, 'user_id' => Auth::user()->id],
            ['score' => $request->score]
        );
        return [true,__("book-about.successStar")];
    }
}
