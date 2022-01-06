<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio = [
            [
                'image' => 'img/portfolio/pone.jpg',
                'title' => 'ini adalah project pertama',
                'text' => '04-01-2022 ',
            ],
            [
                'image' => 'img/portfolio/pempat.jpg',
                'title' => 'ini adalah project ketiga',
                'text' => '04-01-2022 ',
            ],
            [
                'image' => 'img/portfolio/pfour.jpg',
                'title' => 'ini adalah project terakhir',
                'text' => '04-01-2022 ',
            ],
            [
                'image' => 'img/portfolio/pdua.jpg',
                'title' => 'ini adalah project terakhir',
                'text' => '04-01-2022 ',
            ],
           
        ]; 
        DB::table('portfolios')->insert($portfolio);
    }
}
