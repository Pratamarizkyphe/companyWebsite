<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt',
            'about' => 'About Us',
            'home'=> 'Home',
            'gallery'=> 'Gallery',
            'blog'=> 'Blog',
            'portfolio'=> 'Portfolio',
            'contact'=> 'Contact',
            'profile'=> 'Profile',
            'us'=> 'Contact Us',
            'tlp'=>'+62 8821 4826 417',
            'email'=>'pratamarizky249b@gmail.com',
            'address'=>'Kebakkramat, Karanganyar',
        ]);
    }
}
