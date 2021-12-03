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
        DB::table('about')
            ->insert([
                [
                    'id' => '1',
                    'ourstory' => '<p>Kopi seputaran perkebunan dan hutan Lombok Utara. Racikan dengan menggunakan pola fermentasi dan olahan tradisonal untuk keseimbangan varian rasa ada original, coklat, rempah dan khas kopi jantan untuk laki-laki.<br />ROASTING<br />Kopi rimba Rinjani di roasting ke tingkat medium untuk mempertahankan karakter rasa asli kopi dan dipanggang hingga dark. Dan disangrai secara manual untuk mempertahankan rasa tadisional. <br />PROFIL RASA<br />Kehasan Lombok disamping pedas adalah kopi robustanya memiliki rasa dan aroma kopi yang sangat kuat, sangat cocok disajikan sebagai minuman kopi para penikmat, torisem, parlete dan keluarga.<br />karena rasa kopinya khas, dan karakter rasanya dominan dan juga tingkat keasamannya sangat rendah, sehingga sangat nikmat rasanya, apalagi dipadu sensasi original, coklat, jahe, rempah, madu dan sensasi primitiv dengan campur beras.<br />Kopi Arabica di dataran tinggi gunung Rinjani pun menambah kehasan dan sangat monumental dengan tingkat fermentasi delapan jam sampai tigapuluh enam jam.</p>',
                    'ourmenu' => 'Kopi rimba Rinjani di roasting ke tingkat medium untuk mempertahankan karakter rasa asli kopi dan dipanggang hingga dark. Dan disangrai secara manual untuk mempertahankan rasa tadisional.'
                ]
            ]);
    }
}
