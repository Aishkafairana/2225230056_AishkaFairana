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
        Schema::create('po', function (Blueprint $table) {
            $table->id();
            $table->enum('kode_baju', ['A1', 'A2', 'B1', 'B2', 'C1', 'C2',]);
            $table->enum('warna_baju', ['hitam', 'abu', 'biru', 'putih',]);
            $table->enum('ukuran_baju', ['S', 'M', 'L', 'XL']);
            $table->string('metode_pembayaran');
            $table->string('kode_voucher')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('po');
    }
};
