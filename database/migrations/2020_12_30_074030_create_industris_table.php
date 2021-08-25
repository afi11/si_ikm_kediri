<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industri', function (Blueprint $table) {
            $table->string('id_industri',100);
            $table->enum('tipe_usaha',['bsr','kcl']);
            $table->string('pemilik');
            $table->string('nama_perusahaan',255)->nullable();
            $table->string('no_ijin',255)->nullable();
            $table->date('tgl_ijin')->nullable();
            $table->string('status_pm',50)->nullable();
            $table->string('klasifikasi',50)->nullable();
            $table->bigInteger('kec_id')->unsigned()->nullable();
            $table->bigInteger('kel_id')->unsigned()->nullable();
            $table->string('jalan',100)->nullable();
            $table->string('telp_fax',30)->nullable();
            $table->bigInteger('bu_id')->unsigned();
            $table->timestamps();
            $table->enum('is_deleted',['0','1']);

            $table->primary('id_industri');

            $table->foreign('kec_id')->references('id')->on('kecamatan')->onDelete('restrict');
            $table->foreign('kel_id')->references('id')->on('kelurahans')->onDelete('restrict');
            $table->foreign('bu_id')->references('id')->on('badanusaha')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('industri');
    }
}
