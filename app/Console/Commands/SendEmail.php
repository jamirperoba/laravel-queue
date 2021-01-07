<?php

namespace App\Console\Commands;

use App\Jobs\ProcessEmailJob;
use App\Models\User;
use Illuminate\Console\Command;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {total}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails {total}';

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
        $total = ((int)$this->argument('total'));

        $users = User::limit($total)->get();

        foreach ($users as $user) {
            ProcessEmailJob::dispatch($user);
        }
    }
}
