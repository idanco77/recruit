<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidates')->insert([
            'name' => Str::random(10),
            'email' => Str::random(5).'@gmail.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);        
    }
}
