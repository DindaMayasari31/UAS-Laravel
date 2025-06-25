<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title"=>"Home"
    ]);
    
});

Route::get('/about', function () {
    return view('about',[
        "title"=>"about",
        "name"=>"Dinda Mayasari",
        "email"=>"dindamayasari31@gmail.com",
        "image"=>"riwayat.jpg",
    ]
);
});

Route::get('/blog', function () {
    return view('posts',[
        "title"=>"Posts"
    ]);

});