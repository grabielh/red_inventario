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
        Schema::create('device_types', function (Blueprint $table) {
            $table->id();
            $table->string('device_type');
            $table->string('use');
            $table->string('user_name');
            $table->string('device_name');
            $table->boolean('monitor');
            $table->string('monitor_model')->nullable();
            $table->unsignedBigInteger('idconnection');
            
            $table->foreign('idconnection')->references('id')->on('connections'); // Assuming a 'connections' table
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_types');
    }
};
