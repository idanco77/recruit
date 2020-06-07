<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NextStagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nextstages')->insert([
            [
                'from' => 1,
                'to' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'from' => 1,
                'to' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],            
            [
                'from' => 3,
                'to' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], 
            [
                'from' => 3,
                'to' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],                  
            ]);         
    }
}
