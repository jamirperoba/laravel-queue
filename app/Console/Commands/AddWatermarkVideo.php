<?php

namespace App\Console\Commands;

use App\Jobs\AddWatermarkVideoJob;
use Illuminate\Console\Command;
use FFMpeg\Filters\Video\VideoFilters;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\Filters\WatermarkFactory;

class AddWatermarkVideo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'videos:add-watermark';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add watermark in video';

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
        AddWatermarkVideoJob::dispatch();
    }

    public function tags()
    {
        return ['CovertVideo'];
    }
}
