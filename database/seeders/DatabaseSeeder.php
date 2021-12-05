<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Bambang',
            'email' => 'bam@mail.com',
            'password' => bcrypt('bam123')
        ]);

        User::create([
            'name' => 'Susilo',
            'email' => 'susilo@mail.com',
            'password' => bcrypt('susilo123')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est debitis molestiae at quae repellat fuga qui impedit. Neque, similique magnam. Fugit doloremque impedit cum maxime, tempora ut voluptatibus id quia!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At fugit molestias maxime quod enim molestiae possimus exercitationem provident omnis quaerat, atque sapiente distinctio alias est ut odit laborum eum vitae doloremque veniam excepturi dignissimos quo id neque. Eligendi, labore. Ut consectetur adipisci harum nostrum facere aliquid voluptatum? Rem voluptates, earum et enim eos, amet id itaque officia, fugiat facere animi. Sed et ullam debitis odit. Obcaecati explicabo ipsam cumque accusamus repudiandae numquam minus possimus cum neque in commodi ab nisi maxime quisquam perspiciatis eligendi perferendis veritatis, necessitatibus reiciendis soluta aliquid vel! Quia, placeat molestias omnis dolores aperiam voluptatibus vero soluta?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est debitis molestiae at quae repellat fuga qui impedit. Neque, similique magnam. Fugit doloremque impedit cum maxime, tempora ut voluptatibus id quia!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At fugit molestias maxime quod enim molestiae possimus exercitationem provident omnis quaerat, atque sapiente distinctio alias est ut odit laborum eum vitae doloremque veniam excepturi dignissimos quo id neque. Eligendi, labore. Ut consectetur adipisci harum nostrum facere aliquid voluptatum? Rem voluptates, earum et enim eos, amet id itaque officia, fugiat facere animi. Sed et ullam debitis odit. Obcaecati explicabo ipsam cumque accusamus repudiandae numquam minus possimus cum neque in commodi ab nisi maxime quisquam perspiciatis eligendi perferendis veritatis, necessitatibus reiciendis soluta aliquid vel! Quia, placeat molestias omnis dolores aperiam voluptatibus vero soluta?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est debitis molestiae at quae repellat fuga qui impedit. Neque, similique magnam. Fugit doloremque impedit cum maxime, tempora ut voluptatibus id quia!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At fugit molestias maxime quod enim molestiae possimus exercitationem provident omnis quaerat, atque sapiente distinctio alias est ut odit laborum eum vitae doloremque veniam excepturi dignissimos quo id neque. Eligendi, labore. Ut consectetur adipisci harum nostrum facere aliquid voluptatum? Rem voluptates, earum et enim eos, amet id itaque officia, fugiat facere animi. Sed et ullam debitis odit. Obcaecati explicabo ipsam cumque accusamus repudiandae numquam minus possimus cum neque in commodi ab nisi maxime quisquam perspiciatis eligendi perferendis veritatis, necessitatibus reiciendis soluta aliquid vel! Quia, placeat molestias omnis dolores aperiam voluptatibus vero soluta?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est debitis molestiae at quae repellat fuga qui impedit. Neque, similique magnam. Fugit doloremque impedit cum maxime, tempora ut voluptatibus id quia!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At fugit molestias maxime quod enim molestiae possimus exercitationem provident omnis quaerat, atque sapiente distinctio alias est ut odit laborum eum vitae doloremque veniam excepturi dignissimos quo id neque. Eligendi, labore. Ut consectetur adipisci harum nostrum facere aliquid voluptatum? Rem voluptates, earum et enim eos, amet id itaque officia, fugiat facere animi. Sed et ullam debitis odit. Obcaecati explicabo ipsam cumque accusamus repudiandae numquam minus possimus cum neque in commodi ab nisi maxime quisquam perspiciatis eligendi perferendis veritatis, necessitatibus reiciendis soluta aliquid vel! Quia, placeat molestias omnis dolores aperiam voluptatibus vero soluta?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
