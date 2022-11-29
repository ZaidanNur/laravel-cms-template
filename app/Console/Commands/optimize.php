<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class optimize extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'optimize:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command For Optimize Larvel Chace';

    /**
     * Execute the console command.
     * @return int
     */
    public function handle()
    {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('event:clear');
        Artisan::call('route:clear');
        return Command::SUCCESS;
    }
}