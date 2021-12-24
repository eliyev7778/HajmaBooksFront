<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController as index;
use App\Http\Controllers\CategoryController as Category;
use App\Http\Controllers\LoginController as Login;
use App\Http\Controllers\BookController as Book;
use App\Http\Controllers\BooksController as Books;
use App\Http\Controllers\CartController as Cart;
use App\Http\Controllers\DashboardController as Dashboard;
use App\Http\Controllers\PaymentController as Payment;
use App\Http\Controllers\CollectionController as Collection;


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
    // single book
    Route::get('/book/{slug}', [Book::class, 'index'])->name('book');
    Route::post('/post-comment', [Book::class, 'post_comment'])->name('post-comment');
    Route::post('/delete-comment', [Book::class, 'delete_comment'])->name('delete-comment');
    Route::post('/like-book', [Book::class, 'like_book'])->name('like-book');
    Route::post('/star-book', [Book::class, 'star_book'])->name('star-book');
    // books
    Route::match(['get', 'post'],'/books', [Books::class, 'index'])->name('books');
    Route::match(['get', 'post'],'/audio-books', [Books::class, 'audio_books'])->name('audio-books');
    //collection
    Route::get('/collections', [Collection::class, 'index'])->name('collections');
    // cart
    Route::get('/cart', [Cart::class, 'index'])->name('cart');
    Route::post('/add-cart', [Cart::class, 'add_cart'])->name('add-cart');
    Route::post('/delete-cart', [Cart::class, 'delete_cart'])->name('delete-cart');
    // Dashboard
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
    // Profil
    Route::get('/profile', [Dashboard::class, 'profile'])->name('profile');
    Route::post('/editProfile', [Dashboard::class, 'editProfile'])->name('editProfile');

    // Payment
    Route::get('/payment', [Payment::class, 'index'])->name('payment');
    Route::post('/stripe-post', [Payment::class, 'stripe_post'])->name('stripe-post');

});
