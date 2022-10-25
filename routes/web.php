<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostColltroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dik Dik Nur Illahi",
        "email" => "Dikdiknurillahi17@gmail.com",
        "image" => "dik.jpg"
    ]);
});



Route::get('/blog', [PostColltroller::class, 'index']);
//halaman single posts
Route::get('/posts/{slug}', [PostColltroller::class, 'show']);
