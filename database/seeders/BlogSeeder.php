<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'image' =>'img/blog/content02.jpg',
            'author' =>'Prtmrzky',
            'title' => 'Manfaat Joging',
            
            'content' =>'Untuk menjaga kesehatan tubuh dan kesehatan mental, salah satu kegiatan penting untuk dilakukan adalah melakukan olahraga secara rutin.

            Ada banyak jenis olahraga yang dapat dilakukan tanpa memerlukan alat khusus dan ekonomis, salah satunya adalah berlari.
            
            Lari merupakan jenis olahraga yang praktis untuk dilakukan dimanapun dan kapanpun, namun memiliki sejumlah manfaat bagi kesehatan dan kebugaran tubuh, termasuk kesehatan fisik maupun kesehatan mental.
            
            Olahraga lari dikategorikan sebagai olahraga kardiovaskular yang sempurna. Lari secara rutin efektif untuk membakar lemak di dalam tubuh, selain itu dapat menjaga kesehatan jantung hingga membuat suasana hati menjadi lebih bahagia sehingga berpengaruh baik bagi kesehatan fisik dan mental.
            
            Jenis olahraga lari sering dianjurkan sebagai salah satu opsi alternatif yang dapat memperbaiki kebiasaan buruk khususnya bagi yang malas berolahraga untuk memulai menjalani hidup sehat.</p>',
            'created_at' => '2022-01-05 19:31:28'
        ]);
    }
}
