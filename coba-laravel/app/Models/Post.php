<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
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

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}






















