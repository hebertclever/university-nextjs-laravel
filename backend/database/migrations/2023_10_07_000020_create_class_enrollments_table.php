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
        Schema::create('class_enrollments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('class_enrollments', function (Blueprint $table) {
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('student_id');

            $table->foreign('class_id')->references('class_id')->on('classes');
            $table->foreign('student_id')->references('user_id')->on('users');

            $table->primary(['class_id', 'student_id']); // Composite primary key
        });

    }
};
