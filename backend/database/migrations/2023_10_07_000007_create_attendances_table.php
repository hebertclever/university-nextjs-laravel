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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('class_id');
            $table->date('date');
            $table->enum('status', ['present', 'absent', 'late']);

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('class_id')->references('class_id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
