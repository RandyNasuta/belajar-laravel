<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Randy Nasuta',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam ratione porro debitis dicta, reiciendis velit deserunt. Nihil fugiat officia ipsum corrupti, natus, in adipisci hic beatae earum saepe dolorem corporis ducimus omnis impedit expedita, possimus similique quidem amet consectetur. Praesentium a debitis modi. Sed sit officia laudantium sunt asperiores?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Amane Kanata',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores asperiores ea quae repellat cupiditate rem modi harum tenetur alias ad quaerat unde, excepturi enim porro vitae iure fuga nihil maiores dignissimos ut, beatae quisquam error quis! Corporis unde labore, facere, voluptatem ratione nisi harum necessitatibus consequatur totam quibusdam iusto. Quis fuga non aliquid excepturi fugiat rerum obcaecati debitis vitae maiores deserunt odio sequi ab a nemo sit, impedit quod nulla, nihil laudantium labore asperiores. Asperiores at repudiandae quod mollitia nemo dolore distinctio odit, earum accusamus harum aliquam, rerum nobis voluptate corrupti similique unde. Iusto reprehenderit vel cupiditate nam aspernatur minus.'
        ]
    ];

    public static function all(){
        return self::$blog_posts;
    }

    public static function find($slug){
        $posts =self::$blog_posts;
        $post = [];

        foreach ($posts as $p) {
            if ($p['slug'] === $slug){
                $post = $p;
            }
        }

        return $post;
    }
}
