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
        Schema::create('flight_class_facility', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_class_id')->references('id')->on('flight_classes')->onDelete('cascade');
            $table->foreignId('facility_id')->references('id')->on('facilities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_class_facility_pivot');
    }
};
