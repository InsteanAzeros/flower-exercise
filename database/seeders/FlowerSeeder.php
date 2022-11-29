<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            [
                'name' => 'Rose',
                'price' => 3
            ],
            [
                'name' => 'Daisy',
                'price' => 2
            ]
        ]);
    }
}
