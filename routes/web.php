<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , function () {
    return view('index');
});
Route::get('/home' , function () {
    return view('index');
});

Route::get('/post.blade.html', function () {
    return view('post');
});
Route::get('/about.blade.html', function () {
    return view('about');
});

Route::get('/contact.blade.html', function () {
    return view('contact');
});


// what is cookies
// text files with small pieces of data — 
// like a username and password — that are used to 
// identify your computer as you use a computer network. 
// Specific cookies known as HTTP cookies are used to identify 
// specific users and  improve your web browsing experience.
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
