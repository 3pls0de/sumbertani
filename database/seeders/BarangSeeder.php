<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('barang')
            ->insert([
                [
                    'tipe_produk' => '1',
                    'nama_produk' => 'Bubuk Kopi Original',
                    'foto_produk' => null,
                    'detail_komposisi' => 'Kopi pilihan Grade A, diproses tanpa campuran atau kopi murni',
                    'harga_produk' => '15000',
                    'ukuran_kemasan' => '100GR'
                ],
                [
                    'tipe_produk' => '1',
                    'nama_produk' => 'Bubuk Kopi Vanila',
                    'foto_produk' => null,
                    'detail_komposisi' => 'dengan campuran kayu vanilla asli',
                    'harga_produk' => '15000',
                    'ukuran_kemasan' => '100GR'
                ],
                [
                    'tipe_produk' => '1',
                    'nama_produk' => 'Bubuk Kopi Jahe',
                    'foto_produk' => null,
                    'detail_komposisi' => 'dengan campuran jahe',
                    'harga_produk' => '15000',
                    'ukuran_kemasan' => '100GR'
                ],
                [
                    'tipe_produk' => '1',
                    'nama_produk' => 'Bubuk Kopi Beras',
                    'foto_produk' => null,
                    'detail_komposisi' => 'dicampur dengan beras',
                    'harga_produk' => '12000',
                    'ukuran_kemasan' => '100GR'
                ],
                [
                    'tipe_produk' => '1',
                    'nama_produk' => 'Bubuk Honey Proses',
                    'foto_produk' => null,
                    'detail_komposisi' => 'Kopi Grade A, diproses dengan fermentasi dan tanpa campuran atau kopi murni',
                    'harga_produk' => '25000',
                    'ukuran_kemasan' => '100GR'
                ],
                
                [
                    'tipe_produk' => '2',
                    'nama_produk' => 'Bubuk Kopi Honey Process',
                    'foto_produk' => null,
                    'detail_komposisi' => 'Kopi Grade A, diproses dengan membiarkan serat manis di luar cangkang kemudian dijemur dalam suhu tertentu  sehingga menimbulkan rasa dan aroma madu',
                    'harga_produk' => '25000',
                    'ukuran_kemasan' => '100GR'
                ],
                [
                    'tipe_produk' => '2',
                    'nama_produk' => 'Bubuk Kopi Semi Wash',
                    'foto_produk' => null,
                    'detail_komposisi' => 'Kopi Grade A, diproses dengan fermentasi 8 jam dan tanpa campuran atau kopi murni',
                    'harga_produk' => '30000',
                    'ukuran_kemasan' => '100GR'
                ],
                [
                    'tipe_produk' => '2',
                    'nama_produk' => 'Bubuk Kopi Full Wash',
                    'foto_produk' => null,
                    'detail_komposisi' => 'Kopi pilihan Grade A, diproses dengan fermentasi 36 jam dan tanpa campuran atau kopi murni',
                    'harga_produk' => '35000',
                    'ukuran_kemasan' => '100GR'
                ],
                [
                    'tipe_produk' => '2',
                    'nama_produk' => 'Bubuk Kopi Teh',
                    'foto_produk' => null,
                    'detail_komposisi' => 'dicampur dengan daun teh',
                    'harga_produk' => '10000',
                    'ukuran_kemasan' => '100GR'
                ],
                [
                    'tipe_produk' => '2',
                    'nama_produk' => 'Bubuk Kopi Rempah',
                    'foto_produk' => null,
                    'detail_komposisi' => 'kopi bubuk, madu, pala, kayu manis bubuk, kapulaga bubuk, jahe, memarkan 1 serai, memarkan daun cengkeh',
                    'harga_produk' => '15000',
                    'ukuran_kemasan' => '100GR'
                ]
            ]);
    }
}
