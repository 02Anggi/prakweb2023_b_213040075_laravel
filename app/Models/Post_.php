<?php 

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Anggi Kusuma",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non nulla veniam amet, in natus cumque, culpa beatae nihil, error vero quibusdam? Id quos maxime sequi perspiciatis corrupti libero blanditiis mollitia quas atque ipsam, sed illo eius optio numquam voluptatibus unde incidunt voluptatum sint quia voluptates voluptatem provident. Distinctio qui error accusantium sunt sint placeat soluta ipsa assumenda praesentium quam tenetur ducimus, eaque quia pariatur voluptas nesciunt amet mollitia odit natus? Sint possimus cumque voluptates blanditiis harum in, voluptatibus mollitia temporibus?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Angga Kusuma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque rem ipsa quibusdam, doloribus laborum dicta quos labore quaerat nihil voluptatibus soluta obcaecati, corrupti vel, deleniti totam quae commodi quod? Molestias explicabo, quisquam illum fuga corporis dolor excepturi dicta sapiente temporibus ab blanditiis accusamus dignissimos dolore, eos officia? Debitis culpa soluta, tempora sint neque cupiditate dolorum exercitationem porro maiores consequuntur consectetur suscipit provident fuga quia, nihil magni cumque ipsam, rerum officia! Expedita, deleniti! Ut fugit provident ipsum, et explicabo reprehenderit. Quasi pariatur cupiditate ab amet molestiae voluptas, incidunt deserunt corporis beatae minima nulla facilis eligendi adipisci officia a dolorum accusamus illo!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}