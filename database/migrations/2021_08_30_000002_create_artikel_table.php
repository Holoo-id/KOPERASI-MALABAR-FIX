<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('added_by');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('tanggal');
            // $table->string('gambar');
            // $table->string('gambar_path');
            $table->foreignId('gambar_sampul')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->foreign('gambar_sampul')
            ->references('id')
            ->on('galeri')
            ->onDelete('set null');

            $table->foreign('added_by')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
