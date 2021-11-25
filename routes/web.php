<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController as index;
use App\Http\Controllers\CategoryController as Category;
use App\Http\Controllers\LoginController as Login;


Route::get('/lang/{lang}',function($lang){
    \Session::put('locale',$lang);
    return redirect()->back();
})->name('lang');

Route::middleware(['lang'])->group(function () {
   //index
    Route::get('/', [index::class, 'index'])->name('index');
    //category
    Route::get('/category/{slug}', [Category::class, 'index'])->name('category');

    // login
    Route::get('/login', [Login::class, 'index'])->name('login');
    Route::post('/post-login', [Login::class, 'post_login'])->name('post-login');
    Route::post('/post-register', [Login::class, 'post_register'])->name('post-register');
    // search
    Route::post('/post-search', [Login::class, 'post_search'])->name('post-search');
});
