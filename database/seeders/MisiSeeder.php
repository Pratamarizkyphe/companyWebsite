<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       
        DB::table('misis')->insert([
            'image' => 'img/misis/visimisi.jpg',
            'title' => 'Launch Your SaaS Website in Minutes!',
            'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',
            'visi' => 'Visi',
            'visitxt' => 'Mendeskripsikan tujuan perusahaan di masa mendatang. Berbeda dengan misi, visi biasanya menggambarkan apa yang ingin diraih perusahaan',
            'misi' => 'Misi',
            'misitxt' => 'Mendeskripsikan rencana apa yang dilakukan perusahaan untuk mencapai visi. Misi bisa meliputi deskripsi mengenai fungsi dan kegiatan yang dilakukan oleh perusahaan sehari-harinya',
        ]);
    }
}
