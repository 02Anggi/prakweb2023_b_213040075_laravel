<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Muhammad Anggi Kusuma',
        //     'email' => 'anggi.213040075@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Muhammad Angga Kusuma',
        //     'email' => 'angga.213040074@mail.unpas.ac.id',
        //     'password' => bcrypt('54321')
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
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, repellat iusto asperiores repellendus illo facilis provident recusandae at.</p> <p>Saepe mollitia rerum repellendus sint ducimus. Odit necessitatibus animi sint, dolore similique nam repellendus tempore aliquid, nobis, sed mollitia sunt ratione? Nesciunt aut, veniam dolorum laborum in minima saepe aliquam sed. </p> <p>Quibusdam libero excepturi voluptas corrupti ipsa hic doloremque, facilis eum odio. Quis porro deleniti atque ex consectetur! Voluptas sint ullam ab incidunt tenetur earum iste provident deleniti vel ea placeat, assumenda non. </p>', 
        //     'category_id' => 1, 
        //     'user_id' => 1]);

        // Post::create([
        //     'title' => 'Judul Ke Dua', 
        //     'slug' => 'judul-ke-dua', 
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, repellat iusto asperiores repellendus illo facilis provident recusandae at.</p> <p>Saepe mollitia rerum repellendus sint ducimus. Odit necessitatibus animi sint, dolore similique nam repellendus tempore aliquid, nobis, sed mollitia sunt ratione? Nesciunt aut, veniam dolorum laborum in minima saepe aliquam sed. </p> <p>Quibusdam libero excepturi voluptas corrupti ipsa hic doloremque, facilis eum odio. Quis porro deleniti atque ex consectetur! Voluptas sint ullam ab incidunt tenetur earum iste provident deleniti vel ea placeat, assumenda non. </p>', 
        //     'category_id' => 1, 
        //     'user_id' => 1]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga', 
        //     'slug' => 'judul-ke-tiga', 
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, repellat iusto asperiores repellendus illo facilis provident recusandae at.</p> <p>Saepe mollitia rerum repellendus sint ducimus. Odit necessitatibus animi sint, dolore similique nam repellendus tempore aliquid, nobis, sed mollitia sunt ratione? Nesciunt aut, veniam dolorum laborum in minima saepe aliquam sed. </p> <p>Quibusdam libero excepturi voluptas corrupti ipsa hic doloremque, facilis eum odio. Quis porro deleniti atque ex consectetur! Voluptas sint ullam ab incidunt tenetur earum iste provident deleniti vel ea placeat, assumenda non. </p>',
        //     'category_id' => 2, 
        //     'user_id' => 1]);
        
        // Post::create([
        //     'title' => 'Judul Ke Empat', 
        //     'slug' => 'judul-ke-empat', 
        //     'excerpt' => 'Lorem ipsum keempat',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, repellat iusto asperiores repellendus illo facilis provident recusandae at.</p> <p>Saepe mollitia rerum repellendus sint ducimus. Odit necessitatibus animi sint, dolore similique nam repellendus tempore aliquid, nobis, sed mollitia sunt ratione? Nesciunt aut, veniam dolorum laborum in minima saepe aliquam sed. </p> <p>Quibusdam libero excepturi voluptas corrupti ipsa hic doloremque, facilis eum odio. Quis porro deleniti atque ex consectetur! Voluptas sint ullam ab incidunt tenetur earum iste provident deleniti vel ea placeat, assumenda non. </p>',
        //     'category_id' => 2, 
        //     'user_id' => 2]);    
    }
}
