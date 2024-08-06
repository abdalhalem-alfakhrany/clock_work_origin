<?php

namespace Abdalhalemalfakhrany\ClockWorkOrigin\Commands;

use Illuminate\Console\Command;

class ClockWorkOriginCommand extends Command
{
    public $signature = 'clock-work-origin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
