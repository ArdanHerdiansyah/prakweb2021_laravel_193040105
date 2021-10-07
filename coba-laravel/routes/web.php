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
        "name" => "Ardan Herdiansyah",
        "email" => "ArdanHerdiansyah3@gmail.com",
        "image" => "Al-Quran.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Ardan Herdiansyah",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, ex quia. Accusamus ipsam maxime, 
            quidem corrupti assumenda ut quaerat enim optio repellendus ex adipisci pariatur repellat quisquam earum 
            voluptatum animi nihil quasi accusantium labore laboriosam libero dolores impedit minima! Quisquam reprehenderit 
            uod molestiae ratione eos rerum reiciendis impedit fuga voluptatum expedita cupiditate perspiciatis accusamus, 
            ipsa officia, ea maiores laborum autem ipsam minima? Porro mollitia suscipit eaque autem dolores blanditiis 
            perferendis corrupti ipsam, cumque eveniet ad distinctio quod odio minima rem!"
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Riksa Kusumah",
            "body" => "orem ipsum dolor sit amet consectetur adipisicing elit. Similique, natus non eum mollitia 
            molestias laboriosam. Harum, totam autem! Facere inventore, corrupti temporibus, provident obcaecati 
            blanditiis ad exercitationem maxime quisquam dicta veniam rem molestiae! Sunt, incidunt. Ab deserunt 
            sint voluptatum expedita aliquam, adipisci et eius eligendi atque vel? Cupiditate saepe ullam atque 
            facere officia facilis quisquam dolore qui beatae debitis! Quas quo dolor quibusdam, adipisci excepturi 
            incidunt ratione esse inventore! Ipsa explicabo maiores velit sunt qui earum quasi eaque modi officia 
            laboriosam, dignissimos numquam incidunt nihil ut facere impedit quia dicta ea debitis reprehenderit. 
            Provident mollitia quisquam atque ducimus perspiciatis iure repellendus ab distinctio id sapiente incidunt 
            quis in, voluptatum neque enim vero ipsa vel repellat unde, tempore quaerat nostrum? Blanditiis."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "Judul-post-ketiga",
            "author" => "Jagaddhita Arya K",
            "body" => "orem ipsum dolor sit amet consectetur adipisicing elit. Similique, natus non eum mollitia 
            molestias laboriosam. Harum, totam autem! Facere inventore, corrupti temporibus, provident obcaecati 
            blanditiis ad exercitationem maxime quisquam dicta veniam rem molestiae! Sunt, incidunt. Ab deserunt 
            sint voluptatum expedita aliquam, adipisci et eius eligendi atque vel? Cupiditate saepe ullam atque 
            facere officia facilis quisquam dolore qui beatae debitis! Quas quo dolor quibusdam, adipisci excepturi 
            incidunt ratione esse inventore! Ipsa explicabo maiores velit sunt qui earum quasi eaque modi officia 
            laboriosam, dignissimos numquam incidunt nihil ut facere impedit quia dicta ea debitis reprehenderit. 
            Provident mollitia quisquam atque ducimus perspiciatis iure repellendus ab distinctio id sapiente incidunt 
            quis in, voluptatum neque enim vero ipsa vel repellat unde, tempore quaerat nostrum? Blanditiis. reiciendis impedit fuga voluptatum expedita cupiditate perspiciatis accusamus, 
            ipsa officia, ea maiores laborum autem ipsam minima? Porro mollitia suscipit eaque autem dolores blanditiis 
            perferendis corrupti ipsam, cumque eveniet ad distinctio quod odio minima rem!"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Ardan Herdiansyah",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, ex quia. Accusamus ipsam maxime, 
            quidem corrupti assumenda ut quaerat enim optio repellendus ex adipisci pariatur repellat quisquam earum 
            voluptatum animi nihil quasi accusantium labore laboriosam libero dolores impedit minima! Quisquam reprehenderit 
            uod molestiae ratione eos rerum reiciendis impedit fuga voluptatum expedita cupiditate perspiciatis accusamus, 
            ipsa officia, ea maiores laborum autem ipsam minima? Porro mollitia suscipit eaque autem dolores blanditiis 
            perferendis corrupti ipsam, cumque eveniet ad distinctio quod odio minima rem!"
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Riksa Kusumah",
            "body" => "orem ipsum dolor sit amet consectetur adipisicing elit. Similique, natus non eum mollitia 
            molestias laboriosam. Harum, totam autem! Facere inventore, corrupti temporibus, provident obcaecati 
            blanditiis ad exercitationem maxime quisquam dicta veniam rem molestiae! Sunt, incidunt. Ab deserunt 
            sint voluptatum expedita aliquam, adipisci et eius eligendi atque vel? Cupiditate saepe ullam atque 
            facere officia facilis quisquam dolore qui beatae debitis! Quas quo dolor quibusdam, adipisci excepturi 
            incidunt ratione esse inventore! Ipsa explicabo maiores velit sunt qui earum quasi eaque modi officia 
            laboriosam, dignissimos numquam incidunt nihil ut facere impedit quia dicta ea debitis reprehenderit. 
            Provident mollitia quisquam atque ducimus perspiciatis iure repellendus ab distinctio id sapiente incidunt 
            quis in, voluptatum neque enim vero ipsa vel repellat unde, tempore quaerat nostrum? Blanditiis."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "Judul-post-ketiga",
            "author" => "Jagaddhita Arya K",
            "body" => "orem ipsum dolor sit amet consectetur adipisicing elit. Similique, natus non eum mollitia 
            molestias laboriosam. Harum, totam autem! Facere inventore, corrupti temporibus, provident obcaecati 
            blanditiis ad exercitationem maxime quisquam dicta veniam rem molestiae! Sunt, incidunt. Ab deserunt 
            sint voluptatum expedita aliquam, adipisci et eius eligendi atque vel? Cupiditate saepe ullam atque 
            facere officia facilis quisquam dolore qui beatae debitis! Quas quo dolor quibusdam, adipisci excepturi 
            incidunt ratione esse inventore! Ipsa explicabo maiores velit sunt qui earum quasi eaque modi officia 
            laboriosam, dignissimos numquam incidunt nihil ut facere impedit quia dicta ea debitis reprehenderit. 
            Provident mollitia quisquam atque ducimus perspiciatis iure repellendus ab distinctio id sapiente incidunt 
            quis in, voluptatum neque enim vero ipsa vel repellat unde, tempore quaerat nostrum? Blanditiis. reiciendis impedit fuga voluptatum expedita cupiditate perspiciatis accusamus, 
            ipsa officia, ea maiores laborum autem ipsam minima? Porro mollitia suscipit eaque autem dolores blanditiis 
            perferendis corrupti ipsam, cumque eveniet ad distinctio quod odio minima rem!"
        ]
    ];


    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]); 
});
















