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
            $table->string('model');
            $table->string('dimensions');
            $table->string('power_supply');
            $table->string('battery_package');
            $table->string('processor');
            $table->string('memory');
            $table->string('storage');
            $table->string('monitor');
            $table->string('keyboard');
            $table->string('connectors_slots');
            $table->string('security_features');
            $table->string('wireless_features');
            $table->string('img')->nullable();
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
