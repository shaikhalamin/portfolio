<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class Testcommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:Test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is just for testing the command is working or not';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        echo  "Hello from commandline \n";
        Log::info(date_default_timezone_get() . ' scheduling command and logging at every with php version : ' . phpversion() . now("Asia/Dhaka"));
        return "hello test from command line";

        /* return $this->call('queue:work', [
            '--stop-when-empty' => null,
        ]); */
    }
}
