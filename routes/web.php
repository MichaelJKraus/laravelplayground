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

Route::get('/miles', function () {
    $name = "Miles";
    $title = "The Commander in Cheif";
    $color = "Blue";
    $image = "3ixth5.jpg";

    return view("default", ['name' => $name, 'title' => $title, 'color' => $color, 'image' => $image]);
});




Route::get('/mike', function () {
    $name = "Mike";
    $title = "Sargent Derp";
    $color = "Red";
    $image = "3j57a7.jpg";

    return view("default", ['name' => $name, 'title' => $title, 'color' => $color, 'image' => $image]);
});

Route::get('/bruh', function () {
    $name = request('Bruh');
    $title = request('the Bruh');
    $color = request('Black');
    $image = "3j57a7.jpg";

    return view("default", ['name' => $name, 'title' => $title, 'color' => $color, 'image' => $image]);
});

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



