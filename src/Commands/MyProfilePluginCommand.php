<?php

namespace Sikandarmoyaldev\MyProfilePlugin\Commands;

use Illuminate\Console\Command;

class MyProfilePluginCommand extends Command
{
    public $signature = 'my-profile-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
