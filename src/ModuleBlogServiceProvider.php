<?php

namespace Bolsainmobiliariape\ModuleBlog;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bolsainmobiliariape\ModuleBlog\Commands\ModuleBlogCommand;
use Bolsainmobiliariape\ModuleBlog\Http\Livewire\Dashboard\Blog\Edit;
use Bolsainmobiliariape\ModuleBlog\Http\Livewire\Dashboard\Blog\Index;
use Livewire\Livewire;

class ModuleBlogServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        Livewire::component('dashboard.blog.index', Index::class);
        Livewire::component('dashboard.blog.edit', Edit::class);
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('module-blog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_module_blog_table')
            ->hasRoute('blog');
    }
}
