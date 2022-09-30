<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = 
        [
            [
                'nama_film' => 'Ngeri Ngeri Sedep ', 
                'desk_film' => 'Film ini menceritakan tetang keriduan Mak Domu terhadap ketiga anak laki-lakinya yang merantau ke Pulau
                Jawa. Ketiga anaknya tersebut sudah 3 tahun lebih tidak pulang. Tak hanya itu, film ini juga menggambarkan keinginan dari
                Pak Domu agar ketiga anak lelakinya tersebut mengikui apa yang dia inginkan. Namun, ketiga anak lelakinya tersebut menolak
                keinginan Pak Domu karena ingin menentukan hidup mereka sendiri. ', 
                'cover_film' => 'uploads/ngeri.jpg',
                'harga' => '40000'
            ],
            [
                'nama_film' => 'KKN Di Desa Penari', 
                'desk_film' => 'Film ini merupakan film horor yang diangkat dari kisah nyata yaitu 6 mahasiswa yang diteror dengan kejadian
                mistis di sebuah desa terpencil. Diceritakan banyak kejadian mistis yang dialami oleh sekelompok mahasiswa ketika sedang 
                melaksanakan kuliah kerja nyata (KKN) disebuah desa terpencil bernama Desa Penari. ', 
                'cover_film' => 'uploads/kkn.jpg',
                'harga' => '45000'
            ],
            [
                'nama_film' => 'Jurassic World: Fallen Kingdom', 
                'desk_film' => 'Film ini menceritakan tentang petualangan Owen Grady (Chriss Pratt) dan Claire Dearing (Bryce Dallas Howard) di Isla Nublar. 
                Taman hiburan itu dimiliki oleh seorang yang kaya raya bernama masrani (Irrfan Khan), yang bekerjasama dengan pengembang dari sebuah perusahaan pemerintah yang diawasi militer.
                Terletak disebuah pulau terpencil, para ilmuwan mengembang biakkan berbagai jenis dinosaurus, bahkan mampu membuat spesies lain yang lebih cerdas dan ganas, hasil pencampuran 
                genetik berbagai dinosaurus predator.  ', 
                'cover_film' => 'uploads/jurassic.jpg',
                'harga' => '35000'
            ],
            
        ];
        DB::table('movies')->insert($movies);
    }
}
