<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = [
            [
                'image' => 'img/gallery/kyone.jpg',
                'title' => 'ini judul 1',
                'text' => 'ini deskripsi dari gambar project yang diatas ini deskripsi dari gambar project yang diatas
                ',
            ],
            [
                'image' => 'img/gallery/keytwo.jpg',
                'title' => 'ini judul 2',
                'text' => 'ini deskripsi dari gambar project yang diatas ini deskripsi dari gambar project yang diatas
                
                ',
            ],
            [
                'image' => 'img/gallery/keythree.jpg',
                'title' => 'gambar 3',
                'text' => 'ini deskripsi dari gambar project yang diatas ini deskripsi dari gambar project yang diatas
                ',
            ],
            [
                'image' => 'img/gallery/keyfour.jpg',
                'title' => 'gambar 5',
                'text' => 'ini deskripsi dari gambar project yang diatas ini deskripsi dari gambar project yang diatas
                ',
            ],
            [
                'image' => 'img/gallery/slide 2.png',
                'title' => 'gambar 4',
                'text' => 'ini deskripsi dari gambar project yang diatas ini deskripsi dari gambar project yang diatas
                ',
            ],
            
            [
                'image' => 'img/gallery/slide 3.png',
                'title' => 'gambar 6',
                'text' => 'ini deskripsi dari gambar project yang diatas ini deskripsi dari gambar project yang diatas
                ',
            ],
           
            
            

        ];
    DB::table('galleries')->insert($gallery);
    }
    
}
