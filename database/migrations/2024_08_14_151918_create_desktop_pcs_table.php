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
        Schema::create('desktop_pcs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('PC')->nullable();
            $table->string('motherboard_model');
            $table->string('ram');
            $table->string('storage');
            $table->string('processor');
            $table->string('img')->nullable(); // Assuming image can be nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desktop_pcs');
    }
};
