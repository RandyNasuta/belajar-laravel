<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Database\Factories\UserFactory;
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

        User::factory(5)->create();
        // User::create([
        //     'name' => 'Randy Nasuta',
        //     'email' => 'randynasuta123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis recusandae sint doloremque tempora quos. Officiis tempore, error, fuga assumenda, nemo eaque quod quo quia esse dolor maiores nam exercitationem officia architecto necessitatibus eum aliquam neque? Aut laudantium in culpa laboriosam! Optio aspernatur aut, veritatis consequatur nemo expedita sint laudantium tempore est a quia veniam quos error adipisci.</p><p>Veritatis, ipsum ratione fugit repellat animi distinctio officia dolores quaerat labore nesciunt vel earum, obcaecati vitae neque explicabo quod laboriosam provident molestias fugiat voluptate natus? Corrupti libero harum quae minima ratione quaerat perspiciatis fuga odit aperiam? Veniam totam sit dolore. Unde doloribus incidunt libero laboriosam molestias, facilis optio porro consequuntur.</p><p>Fugiat, nemo, illo aspernatur asperiores perspiciatis laudantium fugit, alias laborum nulla optio deserunt temporibus ipsam labore delectus amet dolore neque. Necessitatibus accusantium possimus officia sequi magnam consequuntur quibusdam, dicta iusto recusandae nemo perferendis omnis sapiente animi magni officiis corrupti id. Omnis, aspernatur beatae?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis recusandae sint doloremque tempora quos. Officiis tempore, error, fuga assumenda, nemo eaque quod quo quia esse dolor maiores nam exercitationem officia architecto necessitatibus eum aliquam neque? Aut laudantium in culpa laboriosam! Optio aspernatur aut, veritatis consequatur nemo expedita sint laudantium tempore est a quia veniam quos error adipisci.</p><p>Veritatis, ipsum ratione fugit repellat animi distinctio officia dolores quaerat labore nesciunt vel earum, obcaecati vitae neque explicabo quod laboriosam provident molestias fugiat voluptate natus? Corrupti libero harum quae minima ratione quaerat perspiciatis fuga odit aperiam? Veniam totam sit dolore. Unde doloribus incidunt libero laboriosam molestias, facilis optio porro consequuntur.</p><p>Fugiat, nemo, illo aspernatur asperiores perspiciatis laudantium fugit, alias laborum nulla optio deserunt temporibus ipsam labore delectus amet dolore neque. Necessitatibus accusantium possimus officia sequi magnam consequuntur quibusdam, dicta iusto recusandae nemo perferendis omnis sapiente animi magni officiis corrupti id. Omnis, aspernatur beatae?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis recusandae sint doloremque tempora quos. Officiis tempore, error, fuga assumenda, nemo eaque quod quo quia esse dolor maiores nam exercitationem officia architecto necessitatibus eum aliquam neque? Aut laudantium in culpa laboriosam! Optio aspernatur aut, veritatis consequatur nemo expedita sint laudantium tempore est a quia veniam quos error adipisci.</p><p>Veritatis, ipsum ratione fugit repellat animi distinctio officia dolores quaerat labore nesciunt vel earum, obcaecati vitae neque explicabo quod laboriosam provident molestias fugiat voluptate natus? Corrupti libero harum quae minima ratione quaerat perspiciatis fuga odit aperiam? Veniam totam sit dolore. Unde doloribus incidunt libero laboriosam molestias, facilis optio porro consequuntur.</p><p>Fugiat, nemo, illo aspernatur asperiores perspiciatis laudantium fugit, alias laborum nulla optio deserunt temporibus ipsam labore delectus amet dolore neque. Necessitatibus accusantium possimus officia sequi magnam consequuntur quibusdam, dicta iusto recusandae nemo perferendis omnis sapiente animi magni officiis corrupti id. Omnis, aspernatur beatae?</p>'
        // ]);
    }
}
