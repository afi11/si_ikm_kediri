<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahanbakarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahanbakar', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_bhn_bkr',100);
            $table->string('volume_bhn_bkr',50);
            $table->string('satuan_bhn_bkr',50);
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
        Schema::dropIfExists('bahanbakar');
    }
}
