<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
                [
                    "title" => "Judul Post Pertama",
                    "slug"  => "judul-post-pertama",
                    "author" => "Diel",
                    "Body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, ipsum numquam eum perferendis a neque ad assumenda excepturi officiis deleniti consectetur corporis nisi odio molestias corrupti sapiente pariatur harum mollitia."
                ],
                [
                    "title" => "Judul Post AAAAA",
                    "slug" => "judul-post-kedua",
                    "author" => "Dodi",
                    "Body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore delectus, blanditiis nihil sint minus a corporis. Incidunt, impedit? Officiis aliquid vero earum sequi. Perferendis incidunt dolore quaerat praesentium atque, assumenda aliquam minus vero, possimus iure quisquam sunt consequuntur odit accusantium voluptates natus veritatis! Maxime odit explicabo voluptas placeat exercitationem? Unde facere quidem in. Est aut non delectus totam nam natus ea ab aspernatur, alias eveniet cupiditate cumque id asperiores maxime ut velit. Nisi cum, atque veniam expedita obcaecati accusamus quos non eligendi, dolorem corrupti harum aspernatur incidunt magnam unde reiciendis in illo eos accusantium ducimus sint et? Modi, dignissimos iure.."
                ]
        ];
    
    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $post = static::all();
        return $post->firstWhere('slug',$slug);
    }
}
