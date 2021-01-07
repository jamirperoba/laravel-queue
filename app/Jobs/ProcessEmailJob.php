<?php

namespace App\Jobs;

use App\Models\User;
use App\Notifications\SendNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Notification;

class ProcessEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 5;
    public $maxExceptions = 3;
    public $timeout = 120;
    private $total;

    /**
     * Create a new job instance.
     *
     * @param $total
     */
    public function __construct($total)
    {
        $this->total = $total;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = User::limit($this->total)->get();

        foreach ($users as $user) {
            Notification::route('mail',$user->email)
                ->notify(new SendNotification());
        }
    }

    public function tags()
    {
        return ['SendEmailUser'];
    }
}
