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
        Schema::create('sirkulasi', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->foreignId('buku_id');
            $table->date('tgl_pinjam');
            $table->char('nbi',100)->unique();
            $table->char('kode_buku',100);
            $table->date('tgl_kembali');
            $table->integer('denda');
            $table->enum('kondisi', ['Baik', 'Rusak']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sirkulasi');
    }
};
