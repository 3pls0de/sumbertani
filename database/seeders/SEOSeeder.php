<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SEOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo')
            ->insert([
                [
                    'id' => '1',
                    'author' => 'Naji, 3pls0de',
                    'description' => 'Bumdesa Darussalam menjual bubuk kopi berkualitas dari Lombok Utara',
                    'keywords' => 'bubuk kopi, kopi, lombok utara, bumdesa darussalam, Naji, 3pls0de',
                    'xindex' => '1',
                    'xfollow' => '1'
                ]
            ]);
    }
}
