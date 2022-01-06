<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'image1' => 'img/about/about-1.png',
            'image2' => 'img/about/about-left-shape.svg',
            'image3' => 'img/about/left-dots.svg',
            'title' => 'Perfect Solution Thriving Online Business',
            'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,'
            
        ]);
        }
    }