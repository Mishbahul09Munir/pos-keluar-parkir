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
        Schema::create('pos_media_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pos_id')->constrained('pos');
            $table->enum('event', [
                'STANDBY',
                'VEHICLE_DETECTED',
                'BUTTON_PRESSED',
                'PRINT_SUCCESS',
                'GATE_OPEN',
                'THANKS'
            ]);
            $table->foreignId('media_asset_id')->constrained();
            $table->integer('order')->default(1);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos_media_rules');
    }
};
