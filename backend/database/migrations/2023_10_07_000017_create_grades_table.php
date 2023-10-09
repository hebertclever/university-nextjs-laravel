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
        Schema::create('grades', function (Blueprint $table) {
            $table->id('grade_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('student_id');
            $table->enum('status', ['approved', 'failed', 'recovery', 'special_attention']);
            $table->double('score'); 
            $table->text('comments')->nullable();

            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('student_id')->references('user_id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
