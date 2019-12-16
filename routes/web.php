<?php

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
    return view('welcome');
});

Route::get('/mike', 'TestController@mike');

Route::get('/miles', 'TestController@miles');

Route::get('/luis', 'TestController@luis');


Route::get('{post}', function ($post) {
    return view("not-found", [
        'myRequest' => $post
    ]);
});



Route::get('/post/post1', function () {
    $name = "THIS IS POST 1 and I have double quotes";
    $title = "YOU ARE THE NOOB";
    $image = "img/3ixth5.jpg";

    return view("posts", ['name' => $name, 'title' => $title, 'image' => $image]);
});

Route::get('/post/post2', function () {
    $name = 'This is post 2 I have single quotes';
    $title = 'This is post 2 Bruh';
    $image = "3j57a7.jpg";

    return view("posts", ['name' => $name, 'title' => $title, 'image' => $image]);
});


Route::get('/post/{post}', function ($post) {
    return view("not-found", [
        'myRequest' => $post
    ]);
});



