<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lokal');
            $table->bigInteger('regional');
            $table->bigInteger('nasional');
            $table->bigInteger('ekspor');
            $table->string('id_industri');
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
        Schema::dropIfExists('pemasaran');
    }
}
