<?php

namespace Salman\LaravelModelUUID\Commands;

use Illuminate\Console\Command;
use Salman\LaravelModelUUID\Services\PublishTraitsService;

class PublishTraits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'publish:uuid-trait';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will publish trait for laravel model uuid';

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
     * @return mixed
     */
    public function handle()
    {
        $check = PublishTraitsService::publishTraits();

        if ($check)
        {
            $this->info('All files have been published');
        }
    }
}
