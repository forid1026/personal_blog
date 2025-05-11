<?php

use App\Livewire\CategoryPage;
use App\Livewire\HomePage;
use App\Livewire\PostDetail;
use App\Livewire\PostPage;
use Illuminate\Support\Facades\Route;




Route::get('/', HomePage::class)->name('home');
Route::get('/posts', PostPage::class)->name('posts');
Route::get('/post/{slug}', PostDetail::class)->name('post.details');
Route::get('/category/{slug}', CategoryPage::class)->name('category');

Route::get('/blog/details', function () {
    return view('blog_details');
});
Route::get('/contact-us', function () {
    return view('contact_us');
});
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/category', function () {
    return view('category_page');
});
