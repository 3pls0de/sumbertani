<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->integer('id', 3);
            $table->integer('tipe_produk', false, 3);
            $table->string('nama_produk', 50);
            $table->text('foto_produk')->nullable();
            $table->string('detail_komposisi', 150)->nullable();
            $table->integer('harga_produk', false, 6);
            $table->string('ukuran_kemasan', 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
