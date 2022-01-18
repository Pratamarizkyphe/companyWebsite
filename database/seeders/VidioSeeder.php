<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VidioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vidio = [
          
            [
                'vidio' => 'img/vidio/vidio.mp4',
                'date' => '04-01-2022 ',
                'name' => 'Rizky pratama',
            ],
            [
                'vidio' => 'img/vidio/vidio.mp4',
                'date' => '04-01-2022 ',
                'name' => 'Rizky pratama',
            ],
           
        ]; 
        DB::table('vidios')->insert($vidio);
    }
}
