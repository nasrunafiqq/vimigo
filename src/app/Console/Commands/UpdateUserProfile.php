<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateUserProfile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-user-profile';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $UserData = ([
            'id' => 1,
            'email' => 'test-email@gmail.com'
        ]);
        UpdateUserProfile::dispatch($UserData);
    }
}
