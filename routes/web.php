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



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "DIk Dik Nur Illahi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid molestias perferendis corrupti? Perspiciatis placeat ea deleniti magni iste dolorem suscipit, eius similique voluptatibus impedit incidunt ducimus ipsa quam ratione accusamus dolore architecto voluptate numquam ab sapiente eum! Consequuntur, nemo assumenda. Repudiandae voluptatum minus eaque facilis vero repellat ad ratione necessitatibus, mollitia nemo? Libero aliquam similique ipsa cumque dicta adipisci consequuntur id quod tempore sequi! Placeat ipsum eius et inventore cumque at, culpa ut aspernatur dolores, ea porro deserunt provident. Quia!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Farhat ganteng",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident neque tenetur at rem eaque ipsum laudantium, et incidunt aut odio ipsa impedit officia error sunt numquam molestiae? Eos laboriosam minima, quisquam, debitis natus ipsa odio sit velit, unde libero in assumenda distinctio! Velit iste consectetur, unde vero enim earum accusamus nisi aliquid laudantium laborum? Dicta molestiae porro non repudiandae, nesciunt iure impedit perferendis eius iste quo exercitationem quam perspiciatis veritatis inventore error culpa iusto distinctio consectetur libero, delectus temporibus sequi ratione esse. Consectetur delectus recusandae est repellendus sit voluptate ipsum, sint incidunt impedit quia molestiae pariatur totam culpa vero."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single posts
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "DIk Dik Nur Illahi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid molestias perferendis corrupti? Perspiciatis placeat ea deleniti magni iste dolorem suscipit, eius similique voluptatibus impedit incidunt ducimus ipsa quam ratione accusamus dolore architecto voluptate numquam ab sapiente eum! Consequuntur, nemo assumenda. Repudiandae voluptatum minus eaque facilis vero repellat ad ratione necessitatibus, mollitia nemo? Libero aliquam similique ipsa cumque dicta adipisci consequuntur id quod tempore sequi! Placeat ipsum eius et inventore cumque at, culpa ut aspernatur dolores, ea porro deserunt provident. Quia!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Farhat ganteng",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident neque tenetur at rem eaque ipsum laudantium, et incidunt aut odio ipsa impedit officia error sunt numquam molestiae? Eos laboriosam minima, quisquam, debitis natus ipsa odio sit velit, unde libero in assumenda distinctio! Velit iste consectetur, unde vero enim earum accusamus nisi aliquid laudantium laborum? Dicta molestiae porro non repudiandae, nesciunt iure impedit perferendis eius iste quo exercitationem quam perspiciatis veritatis inventore error culpa iusto distinctio consectetur libero, delectus temporibus sequi ratione esse. Consectetur delectus recusandae est repellendus sit voluptate ipsum, sint incidunt impedit quia molestiae pariatur totam culpa vero."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
