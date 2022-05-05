<?php

namespace RyanChandler\LaravelSuperScopes\Commands;

use Illuminate\Console\Command;

class LaravelSuperScopesCommand extends Command
{
    public $signature = 'laravel-super-scopes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
