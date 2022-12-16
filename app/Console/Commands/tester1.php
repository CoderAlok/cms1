<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Console\Commands\Log;

class tester1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:alok';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $message = "Hello .. welcome to this command pallette.";
        echo $message;
        // Log::info();
        return 0;
    }
}
