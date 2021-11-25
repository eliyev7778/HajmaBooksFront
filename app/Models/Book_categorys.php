<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_categorys extends Model
{
    use HasFactory;

    public $lang;

    public function __construct()
    {
        $this->lang=\Config::get('app.locale');
    }
    public function category_list(){
        $data=Book_categorys::select(['book_categorys.id','book_categorys.name_'.$this->lang.' as category_name','cs.slug_'.$this->lang.' as slug'])
            ->leftJoin('category_slugs as cs', 'cs.category_id', '=', 'book_categorys.id')->get();
        return $data;
    }
}
