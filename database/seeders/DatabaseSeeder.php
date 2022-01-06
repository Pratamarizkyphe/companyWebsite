<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
           HeroSeeder::class,
           CardSeeder::class,
           AboutSeeder::class,
           GallerySeeder::class,
           PortfolioSeeder::class,
           MisiSeeder::class,
           BlogSeeder::class,
      ]);
    }
}
