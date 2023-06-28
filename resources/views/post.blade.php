@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>By.<a href="" class="text-decoration-none">{{ $post->author->name }}</a> in <a
            href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->slug }}</a></p>
    {!! $post->body !!}
    {{-- Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum ketiga',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae tempora saepe atque consectetur
        magni soluta! Explicabo nemo atque, harum tempora in quo! Expedita, exercitationem culpa odit quas delectus quidem
        ullam earum eligendi nostrum consequatur recusandae voluptatem cumque ipsum corporis deleniti at.</p>
    <p>Delectus quod, expedita blanditiis eum, dolores corrupti consequatur soluta hic perferendis veritatis ducimus quas
        possimus ratione accusamus magnam animi vel at cumque autem, culpa voluptate placeat? Dolorem, soluta sint vel
        assumenda architecto sequi voluptatibus quos commodi necessitatibus debitis quidem nulla repellendus, dolores fuga
        molestiae iusto esse quod ex pariatur blanditiis quaerat? Placeat doloribus nam amet perferendis dignissimos eaque
        distinctio sed excepturi, commodi, quibusdam nulla, veniam at natus impedit similique mollitia illum provident quam
        aliquam sint non maxime architecto! Est possimus unde consectetur nostrum eaque porro esse, quidem minima nisi
        officiis.</p>
    <p>Dicta nostrum quis quibusdam architecto porro autem assumenda, maxime dignissimos harum tenetur recusandae? Rerum
        tempora voluptatum cumque corporis! Obcaecati.</p>'
    ])

    Category::create([
    'name' => 'Programming',
    'slug' => 'programming'
    ]); --}}
    <a href="/posts" class="d-block mt-3">Back to Posts</a>
@endsection
