<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('transactions')->insert([
                'name' => 'Name '.$i.' '.Str::random(10),
                'text' => 'Text '.$i.' '.Str::random(10),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        }
    }
}
