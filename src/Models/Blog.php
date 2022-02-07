<?php

namespace Bolsainmobiliariape\ModuleBlog\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";

    public function getFillable()
    {
        return config('module-blog.fields');
    }
}