<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Alfaturachman',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, laboriosam vero. Saepe, nam molestias iste dicta nisi ullam ipsam expedita inventore harum at vel doloremque dolores! Aut tempora autem magnam.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Maulana',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, laboriosam vero. Saepe, nam molestias iste dicta nisi ullam ipsam expedita inventore harum at vel doloremque dolores! Aut tempora autem magnam.'
            ]
        ];
    }

    public static function find($slug) :array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }

        return $post;
        
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
    }
}
