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
        Schema::create('all_in_ones', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('All in One')->nullable();
            $table->string('model');
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
        Schema::dropIfExists('all_in_ones');
    }
};
