<?php

namespace App\Console\Commands;

use App\Jobs\AddWatermarkVideoJob;
use Illuminate\Console\Command;

class AddWatermarkVideo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'videos:add-watermark {total}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add watermark in video {total}';

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

        for ($i=0;$i<$total;$i++){
            AddWatermarkVideoJob::dispatch();
        }
    }
}
