<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenagakerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenagakerja', function (Blueprint $table) {
            $table->id();
            $table->integer('n_pr');
            $table->integer('n_lk');
            $table->integer('n_asing')->nullable();
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
        Schema::dropIfExists('tenagakerja');
    }
}
