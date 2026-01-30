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
        Schema::create('pos', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pos')->unique();
            $table->enum('jenis_pos', ['MASUK','KELUAR']);
            $table->string('lokasi');
            $table->string('ip_address');
            $table->foreignId('camera_id')->nullable()->constrained();
            $table->foreignId('tarif_id')->nullable()->constrained();
            $table->boolean('is_online')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos');
    }
};
