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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->char('nama_barang', length:20);
            $table->char('kd_barang', length:5);
            $table->integer('satuan');
            $table->char('hargaJual', length:12);
            $table->char('hargaBeli', length:12);
            $table->integer('stok');
            $table->char('status', length:8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
