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
                    //dump($post->links);                    
                    if($post->title != 'Design resources for Developers')
                    return [
                        'title' => $post->title,                    
                        'description' => $post->descr,
                        'path' => '/',
                        'filename' => Str::slug($post->title),                        
                        'links' => $post->links
                        // 'links' => function($post) {
                        //     $links = [];
                        //     $postlinks  = collect($post->links);                            
                        //     foreach ($postlinks as $link) {
                        //        $links[] = $link->text . '*'.$link->href;
                        //     }
                        //     return ($post->links)->map(function ($link) {
                        //         return [
                        //             'text' => $link->text,
                        //             'href' => $link->href, 
                        //         ];
                        //     });
                        //}
                    ];
                    else return [];
                });
            },
        ],
    ]
];
