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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); // Foreign key to users table
            $table->date('appointment_date'); // Date of the appointment
            $table->time('appointment_time'); // Time of the appointment
            $table->text('reason_for_visit')->nullable(); // Reason for the visit
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // Status of the appointment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
