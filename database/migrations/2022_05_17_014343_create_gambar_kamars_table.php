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
        Schema::create('gambar_kamars', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('kamar_kost_id')
                ->on('kamar_kosts')
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
        Schema::dropIfExists('gambar_kamars');
    }
};
