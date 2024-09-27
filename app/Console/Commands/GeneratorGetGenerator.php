<?php

namespace App\Console\Commands;


class GeneratorGetGenerator extends Generator
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generator:get-generator {--max=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $max = $this->option('max');
        $max = $max=='PHP_INT_MAX'? PHP_INT_MAX:((int)$max);

        $ranges = $this->generatorController->getDataGenerator($max);

        foreach ($ranges as $range) {
            echo "Dataset {$range} " . PHP_EOL;
        }

        return 0;
    }
}
