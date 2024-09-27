<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\GeneratorController;

class Generator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generator:get {--max=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $generatorController;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->generatorController = new GeneratorController;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $max = $this->option('max');
        $max = $max=='PHP_INT_MAX'? PHP_INT_MAX:((int)$max);

        $ranges = $this->generatorController->getDataRam($max);

        foreach ($ranges as $range) {
            echo "Dataset {$range} " . PHP_EOL;
        }

        return 0;
    }
}
