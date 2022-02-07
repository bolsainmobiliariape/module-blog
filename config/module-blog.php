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
        "blog.title" => ["string", "max:191", "required"],
        "blog.slug" => ["nullable", "string", "max:191",],
        "blog.description" => ["string", "required"],
        "blog.content" => ["string", "required"],
        "picture" => ["image", "sometimes", "required"]
    ],
];
