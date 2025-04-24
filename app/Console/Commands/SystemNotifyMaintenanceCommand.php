<?php

namespace App\Console\Commands;

use App\Events\SystemMaintenanceEvent;
use Illuminate\Console\Command;

class SystemNotifyMaintenanceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:notify-maintenance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is the command which is to send the end user about maintenance';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $time = $this->ask('When Should it happen?');

        $this->info($time);

        event(new SystemMaintenanceEvent($time));
    }
}
