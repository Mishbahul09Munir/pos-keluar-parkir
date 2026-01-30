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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_transaksi')->unique();
            $table->foreignId('tiket_id')->constrained();
            $table->timestamp('waktu_masuk');
            $table->timestamp('waktu_keluar')->nullable();
            $table->integer('durasi')->nullable();
            $table->integer('tarif');
            $table->integer('total_bayar');
            $table->foreignId('payment_method_id')->constrained();
            $table->foreignId('pos_keluar_id')->constrained('pos');
            $table->foreignId('operator_id')->constrained('users');
            $table->string('foto_keluar')->nullable();
            $table->enum('status', ['OPEN','PAID','CANCEL']);
            $table->enum('sync_status', ['LOCAL','SYNCED'])->default('LOCAL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
