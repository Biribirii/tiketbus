<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRuteTable extends Migration
{
    public function up()
    {
        Schema::create('data_rute', function (Blueprint $table) {
            $table->increments('id_rute');
            $table->string('asal', 100);
            $table->date('tanggal');
            $table->string('tujuan', 100);
            $table->integer('harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_rute');
    }
}
