<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class UpdateUserProfile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $data = $this->data;

        $user = User::find($data['id']);

        try {
            $user->update([
                'email' => $data['email']
            ]);
            echo "user has been updated!" . PHP_EOL;
            Log::info('user has been updated!');
        } catch (\Throwable $th) {
            echo "[error]" . $th .PHP_EOL;
        }
        
    }
}
