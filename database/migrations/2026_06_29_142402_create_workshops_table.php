<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workshops', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->string('pembicara');

            $table->string('lokasi');

            $table->string('penyelenggara');

            $table->date('tanggal');

            $table->string('gambar');

            $table->text('deskripsi');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
