<?php
// config for Bolsainmobiliariape/ModuleBlog
return [

    "fields" => [
        "title",
        "slug",
        "description",
        "content",
        "picture"
    ],

    "names" =>  [
        "title" => "Titulo",
        "slug" => "Slug",
        "description" => "Descripcion",
        "content" => "Contenido",
        "picture" => "Portada"
    ],

    "migrations" => [
        "title" => ["string"],
        "slug" => ["string", "nullable", ""],
        "description" => ["text"],
        "content" => ["text"],
        "picture" => ["text"]
    ],

    "rules" => [
        "blog.title" => ["required", "string", "max:191"],
        "blog.slug" => ["required", "nullable", "string", "max:191",],
        "blog.description" => ["required", "string"],
        "blog.content" => ["required", "string"],
        "picture" => ["image", "sometimes", "nullable"]
    ],
];
