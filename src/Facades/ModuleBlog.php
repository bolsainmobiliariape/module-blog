<?php

namespace Bolsainmobiliariape\ModuleBlog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bolsainmobiliariape\ModuleBlog\ModuleBlog
 */
class ModuleBlog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'module-blog';
    }
}
