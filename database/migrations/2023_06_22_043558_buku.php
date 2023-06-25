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
        Schema::create('Buku', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kode_buku',100);
            $table->string('judul');
            $table->string('pengarang');
            $table->char('tahun',100);
            $table->char('isbn',100);
            $table->integer('jumlah_hal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Buku');
    }
};