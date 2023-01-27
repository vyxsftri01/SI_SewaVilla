<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villa', function (Blueprint $table) {
            $table->id();
            $table->string('namavilla');
            $table->string('fasilitas');
            $table->string('kapasitas');
            $table->string('lantai');
            $table->string('kamar');
            $table->string('kamar_mandi');
            $table->string('view');
            $table->string('kasur');
            $table->integer('harga');
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
        Schema::dropIfExists('villa');
    }
};
