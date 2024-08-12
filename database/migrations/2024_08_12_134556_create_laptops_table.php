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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('model', 100);
            $table->string('dimensions', 150);
            $table->string('power_supply', 150);
            $table->string('battery_package', 150);
            $table->string('processor', 150);
            $table->string('memory', 100);
            $table->string('storage', 100);
            $table->string('monitor', 100);
            $table->string('keyboard', 100);
            $table->string('connectors_slots', 255); // Aumentar el tamaño máximo
            $table->string('security_features', 150);
            $table->string('wireless_features', 150);
            $table->string('img', 50)->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
