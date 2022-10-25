<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    //return view('welcome');
    return view('about', [
        "title" => "About",
        "name" => "DSA",
        "email" => "Dark.gamil.com",
        "image" => "Fotoku.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "DSA",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quo hic nostrum, ratione rem modi sunt nisi delectus maxime inventore numquam excepturi in veritatis fugiat assumenda quis. 
            Est nemo assumenda magnam labore a exercitationem eos sed totam corrupti ut deleniti, nulla facilis nisi quibusdam modi, iure doloribus reiciendis corporis velit veritatis esse et minima dicta? Odio ullam assumenda, 
            voluptatibus fuga quaerat soluta dicta. Illum officiis molestiae perferendis asperiores omnis molestias reprehenderit ea deleniti libero. Delectus error incidunt fuga nihil eaque, 
            eligendi, corrupti, eius velit enim nobis officia ea. Repudiandae ipsum iste tempora rem dicta ullam magni amet itaque doloremque cum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "DR",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsum iure obcaecati ut accusamus, molestiae quia voluptas doloremque corporis quisquam, 
            repellat corrupti nihil animi, dolorem expedita sit! Debitis iusto ipsa nam eligendi. Quisquam nemo totam optio, animi placeat temporibus repudiandae, quae ad architecto illum sunt eaque doloribus dolore voluptatibus. Optio!"
        ]
    ];
    //return view('welcome');
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// hamalam single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "DSA",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quo hic nostrum, ratione rem modi sunt nisi delectus maxime inventore numquam excepturi in veritatis fugiat assumenda quis. 
            Est nemo assumenda magnam labore a exercitationem eos sed totam corrupti ut deleniti, nulla facilis nisi quibusdam modi, iure doloribus reiciendis corporis velit veritatis esse et minima dicta? Odio ullam assumenda, 
            voluptatibus fuga quaerat soluta dicta. Illum officiis molestiae perferendis asperiores omnis molestias reprehenderit ea deleniti libero. Delectus error incidunt fuga nihil eaque, 
            eligendi, corrupti, eius velit enim nobis officia ea. Repudiandae ipsum iste tempora rem dicta ullam magni amet itaque doloremque cum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "DR",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsum iure obcaecati ut accusamus, molestiae quia voluptas doloremque corporis quisquam, 
            repellat corrupti nihil animi, dolorem expedita sit! Debitis iusto ipsa nam eligendi. Quisquam nemo totam optio, animi placeat temporibus repudiandae, quae ad architecto illum sunt eaque doloribus dolore voluptatibus. Optio!"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single",
        "post" => $new_post
    ]);
});
