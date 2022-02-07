<?php

namespace Bolsainmobiliariape\ModuleBlog\Commands;

use Illuminate\Console\Command;

class ModuleBlogCommand extends Command
{
    public $signature = 'module-blog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
