<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPemesanTable extends Migration
{
    public function up()
    {
        Schema::create('data_pemesan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('telepon', 20);
            $table->string('email', 100)->nullable();
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_pemesan');
    }
}
