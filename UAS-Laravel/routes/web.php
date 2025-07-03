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
    $blog_posts =[
    [
    "title" => "Judul Post Pertama",
    "slug" => "judul-post-pertama",
    "author" => " Dinda Mayasari",
    "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Labore natus dolorum modi doloribus, architecto libero dolores, 
mollitia quo, excepturi sed reiciendis facilis maiores minus delectus voluptate ad asperiores. 
Optio, deserunt. Minus a cum tempora beatae nulla doloremque reiciendis! 
Delectus quas voluptatibus deleniti reprehenderit fuga accusantium magni quis sunt, 
fugiat numquam nihil molestiae sit assumenda voluptas, doloribus voluptatem ad totam cupiditate sapiente porro consequatur odit eveniet. 
Nisi ex excepturi officiis, minima ratione aperiam illum consectetur dicta minus ea nihil quod voluptatum!"
    ],
    [
    "title" => "Judul Post Kedua",
    "slug" => "judul-post-kedua",
    "author" => " Dinda Mayasari",
    "body" =>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
Corrupti excepturi esse provident eius eos et nostrum minima quisquam reprehenderit illum accusantium quaerat,
nesciunt quia quibusdam odit id veritatis nam temporibus quidem placeat dolor. 
Cupiditate asperiores error, dicta reiciendis nisi recusandae nam, ratione commodi quam modi,
totam tenetur natus nemo. 
Distinctio cupiditate necessitatibus nostrum hic quibusdam nobis reprehenderit et rem praesentium? 
Porro maiores quam maxime explicabo sequi ad, 
optio delectus dolore quis rerum iusto laboriosam placeat harum inventore culpa laudantium! 
Voluptatibus ipsa vel culpa nostrum neque tenetur corporis fugit illum alias esse 
facere temporibus adipisci incidunt, facilis, provident eligendi nihil perferendis"
    ],

    ];

    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);

});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts =[
    [
    "title" => "Judul Post Pertama",
    "slug" => "judul-post-pertama",
    "author" => " Dinda Mayasari",
    "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Labore natus dolorum modi doloribus, architecto libero dolores, 
mollitia quo, excepturi sed reiciendis facilis maiores minus delectus voluptate ad asperiores. 
Optio, deserunt. Minus a cum tempora beatae nulla doloremque reiciendis! 
Delectus quas voluptatibus deleniti reprehenderit fuga accusantium magni quis sunt, 
fugiat numquam nihil molestiae sit assumenda voluptas, doloribus voluptatem ad totam cupiditate sapiente porro consequatur odit eveniet. 
Nisi ex excepturi officiis, minima ratione aperiam illum consectetur dicta minus ea nihil quod voluptatum!"
    ],
    [
    "title" => "Judul Post Kedua",
    "slug" => "judul-post-kedua",
    "author" => " Dinda Mayasari",
    "body" =>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
Corrupti excepturi esse provident eius eos et nostrum minima quisquam reprehenderit illum accusantium quaerat,
nesciunt quia quibusdam odit id veritatis nam temporibus quidem placeat dolor. 
Cupiditate asperiores error, dicta reiciendis nisi recusandae nam, ratione commodi quam modi,
totam tenetur natus nemo. 
Distinctio cupiditate necessitatibus nostrum hic quibusdam nobis reprehenderit et rem praesentium? 
Porro maiores quam maxime explicabo sequi ad, 
optio delectus dolore quis rerum iusto laboriosam placeat harum inventore culpa laudantium! 
Voluptatibus ipsa vel culpa nostrum neque tenetur corporis fugit illum alias esse 
facere temporibus adipisci incidunt, facilis, provident eligendi nihil perferendis"
    ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "single post",
        "post" => $new_post
    ]);

    
});
