<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                'name' => 'before interview',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'not fit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],        
            [
                'name' => 'sent to manager',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'not fit professionally',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],   
            [
                'name' => 'accepted to work',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],                
            ]);    
    }
}
