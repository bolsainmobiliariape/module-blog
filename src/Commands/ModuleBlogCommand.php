<?php

namespace Bolsainmobiliariape\ModuleBlog\Commands;

use Illuminate\Console\Command;

class ModuleBlogCommand extends Command
{
    public $signature = 'module:blog';

    public $description = 'Publish config and migration';

    public function handle(): int
    {
        
        $this->callSilent('vendor:publish', ['--tag'=>'module-blog-config']);
        $this->callSilent('vendor:publish', ['--tag'=>'module-blog-migrations']);

        $this->comment('Published module-blog config file and migration');

        return self::SUCCESS;
    }
}
