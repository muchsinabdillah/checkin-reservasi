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
        User::factory(3)->create();
        Post::factory(20)->create();
        // User::create([
        //     'name' => 'Diel',
        //     'email' => 'diel@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'ADUL',
        //     'email' => 'adul@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquid necessitatibus, architecto minus est hic, aliquam explicabo quis deserunt beatae molestias, sit velit? Dolorem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquid necessitatibus, architecto minus est hic, aliquam explicabo quis deserunt beatae molestias, sit velit? Dolorem, maiores voluptatibus consequuntur, quisquam corrupti suscipit odio ratione expedita consequatur rerum eligendi magnam, nobis reiciendis cumque ullam iste accusamus commodi a nulla. Modi sed ratione placeat et. Mollitia a iure modi delectus, molestiae, repudiandae commodi beatae soluta temporibus minus iste assumenda ipsum facilis unde itaque. Molestiae eos repudiandae possimus, accusantium reprehenderit sequi perferendis libero porro adipisci ratione explicabo eaque vitae mollitia consequuntur quos minus illo odio dicta velit facilis. Esse facere illo odit veniam qui blanditiis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquid necessitatibus, architecto minus est hic, aliquam explicabo quis deserunt beatae molestias, sit velit? Dolorem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquid necessitatibus, architecto minus est hic, aliquam explicabo quis deserunt beatae molestias, sit velit? Dolorem, maiores voluptatibus consequuntur, quisquam corrupti suscipit odio ratione expedita consequatur rerum eligendi magnam, nobis reiciendis cumque ullam iste accusamus commodi a nulla. Modi sed ratione placeat et. Mollitia a iure modi delectus, molestiae, repudiandae commodi beatae soluta temporibus minus iste assumenda ipsum facilis unde itaque. Molestiae eos repudiandae possimus, accusantium reprehenderit sequi perferendis libero porro adipisci ratione explicabo eaque vitae mollitia consequuntur quos minus illo odio dicta velit facilis. Esse facere illo odit veniam qui blanditiis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquid necessitatibus, architecto minus est hic, aliquam explicabo quis deserunt beatae molestias, sit velit? Dolorem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At aliquid necessitatibus, architecto minus est hic, aliquam explicabo quis deserunt beatae molestias, sit velit? Dolorem, maiores voluptatibus consequuntur, quisquam corrupti suscipit odio ratione expedita consequatur rerum eligendi magnam, nobis reiciendis cumque ullam iste accusamus commodi a nulla. Modi sed ratione placeat et. Mollitia a iure modi delectus, molestiae, repudiandae commodi beatae soluta temporibus minus iste assumenda ipsum facilis unde itaque. Molestiae eos repudiandae possimus, accusantium reprehenderit sequi perferendis libero porro adipisci ratione explicabo eaque vitae mollitia consequuntur quos minus illo odio dicta velit facilis. Esse facere illo odit veniam qui blanditiis!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
