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
        Schema::create('kamar_kosts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->text('peraturan');
            $table->text('fasilitas');
            $table->foreignId('lokasi_kost_id')
                ->on('lokasi_kosts')
                ->onUpdate('cascade')
                ->onDelete('cascaed');
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
        Schema::dropIfExists('kamar_kosts');
    }
};
