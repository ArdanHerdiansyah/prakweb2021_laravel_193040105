<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Ardan Herdiansyah',
        //     'email' => 'Ardan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Riksa Kusumah',
        //     'email' => 'Riksa@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]); 

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]); 

        Post::factory(20)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto unde, nobis accusamus facilis sit neque debitis voluptatibus minima ratione at distinctio laborum fuga itaque molestias repellat deserunt quaerat dolorum nulla.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem officiis nesciunt nam modi? Corrupti deleniti corporis voluptate, nobis quisquam minus ipsa dolorum deserunt illum natus facere reiciendis obcaecati dolores doloremque porro enim ipsum dignissimos repellat numquam eum eos officiis inventore. Hic voluptatum tempora iusto, quisquam expedita voluptates, ducimus eaque officiis voluptate ab reiciendis recusandae magni sequi ea, consectetur libero quas illo repudiandae nemo necessitatibus earum tenetur quaerat beatae accusamus? Recusandae, id tenetur temporibus ab mollitia nobis enim modi soluta accusamus repellendus quas est repudiandae corporis sit explicabo, illum minus earum a eaque doloribus? Quas sed, perspiciatis autem nobis excepturi esse.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto unde, nobis accusamus facilis sit neque debitis voluptatibus minima ratione at distinctio laborum fuga itaque molestias repellat deserunt quaerat dolorum nulla.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem officiis nesciunt nam modi? Corrupti deleniti corporis voluptate, nobis quisquam minus ipsa dolorum deserunt illum natus facere reiciendis obcaecati dolores doloremque porro enim ipsum dignissimos repellat numquam eum eos officiis inventore. Hic voluptatum tempora iusto, quisquam expedita voluptates, ducimus eaque officiis voluptate ab reiciendis recusandae magni sequi ea, consectetur libero quas illo repudiandae nemo necessitatibus earum tenetur quaerat beatae accusamus? Recusandae, id tenetur temporibus ab mollitia nobis enim modi soluta accusamus repellendus quas est repudiandae corporis sit explicabo, illum minus earum a eaque doloribus? Quas sed, perspiciatis autem nobis excepturi esse.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto unde, nobis accusamus facilis sit neque debitis voluptatibus minima ratione at distinctio laborum fuga itaque molestias repellat deserunt quaerat dolorum nulla.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem officiis nesciunt nam modi? Corrupti deleniti corporis voluptate, nobis quisquam minus ipsa dolorum deserunt illum natus facere reiciendis obcaecati dolores doloremque porro enim ipsum dignissimos repellat numquam eum eos officiis inventore. Hic voluptatum tempora iusto, quisquam expedita voluptates, ducimus eaque officiis voluptate ab reiciendis recusandae magni sequi ea, consectetur libero quas illo repudiandae nemo necessitatibus earum tenetur quaerat beatae accusamus? Recusandae, id tenetur temporibus ab mollitia nobis enim modi soluta accusamus repellendus quas est repudiandae corporis sit explicabo, illum minus earum a eaque doloribus? Quas sed, perspiciatis autem nobis excepturi esse.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto unde, nobis accusamus facilis sit neque debitis voluptatibus minima ratione at distinctio laborum fuga itaque molestias repellat deserunt quaerat dolorum nulla.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem officiis nesciunt nam modi? Corrupti deleniti corporis voluptate, nobis quisquam minus ipsa dolorum deserunt illum natus facere reiciendis obcaecati dolores doloremque porro enim ipsum dignissimos repellat numquam eum eos officiis inventore. Hic voluptatum tempora iusto, quisquam expedita voluptates, ducimus eaque officiis voluptate ab reiciendis recusandae magni sequi ea, consectetur libero quas illo repudiandae nemo necessitatibus earum tenetur quaerat beatae accusamus? Recusandae, id tenetur temporibus ab mollitia nobis enim modi soluta accusamus repellendus quas est repudiandae corporis sit explicabo, illum minus earum a eaque doloribus? Quas sed, perspiciatis autem nobis excepturi esse.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}












