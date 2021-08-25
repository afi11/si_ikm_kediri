<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisproduksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenisproduksi', function (Blueprint $table) {
            $table->id();
            $table->string('kbli',50);
            $table->string('kode_cabang',50);
            $table->string('nama_produk',255);
            $table->string('kapasitas_produksi',30);
            $table->string('satuan',30);
            $table->string('nilai_produksi',30);
            $table->string('id_industri',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenisproduksi');
    }
}
