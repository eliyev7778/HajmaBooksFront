<?php

namespace App\Helper;

class index {
    public $lang;

    public function __construct()
    {
        $this->lang=\Config::get('app.locale');
    }
    public function interest($price,$discount){
       return round(($price-$discount)/$price*100,2)." %";
    }

    public function where_slug($slug){
        return "where cs.slug_az=".$slug." or cs.slug_en=".$slug."
        or cs.slug_ru=".$slug." or cs.slug_tr=".$slug." or cs.slug_uk=".$slug." ";
    }
}
