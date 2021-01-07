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
    private $user;

    /**
     * Create a new job instance.
     *
     * @param $total
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $a=$b;
        Notification::route('mail',$this->user->email)
            ->notify(new SendNotification());
    }

    public function tags()
    {
        return ['SendEmailUser'];
    }
}
