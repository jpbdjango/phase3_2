<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('countries')->insert([
            'code' => "be",
            'name' => "Belgique",
            'prefered' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('countries')->insert([
            'code' => "fr",
            'name' => "France",
            'prefered' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('countries')->insert([
            'code' => "lu",
            'name' => "Luxembourg",
            'prefered' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


    }
}
