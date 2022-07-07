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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255)->nullable(true);
            $table->string('kategori')->nullable(true);
            $table->string('gambar')->nullable(true);
            $table->text('deskripsi')->nullable(true);
            $table->string('lokasi', 200)->nullable(true);
            $table->date('tanggal')->nullable(true);
            $table->string('author')->nullable(true);
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
        Schema::dropIfExists('berita');
    }
};
