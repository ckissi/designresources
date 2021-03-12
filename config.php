<?php
use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'title' => 'Design resources for Developers',
    'description' => 'Design resources for Developers',
    'collections' => [    
        'posts' => [
            'extends' => '_layouts.post',
            'items' => function ($config) {
                $posts = json_decode(file_get_contents('https://b-traversy.vercel.app/apicomp'));
                return collect($posts)->map(function ($post) {                    
                    if($post->title != 'Design resources for Developers')
                    return [
                        'title' => $post->title,                    
                        'description' => $post->descr,
                        'path' => '/',
                        'filename' => Str::slug($post->title),                        
                        'links' => $post->links                        
                    ];
                    else return [];
                });
            },
        ],
    ]
];
