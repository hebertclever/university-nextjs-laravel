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
        Schema::create('student_groups', function (Blueprint $table) {
            $table->id('group_id');
            $table->string('group_name');
            $table->unsignedBigInteger('course_id'); // Supondo que cada grupo esteja associado a um curso
            $table->timestamp('creation_date');
            $table->timestamp('modification_date')->nullable();
            $table->unsignedBigInteger('created_by_user'); // Para saber quem criou o grupo
            $table->unsignedBigInteger('modified_by_user')->nullable(); // Para saber quem modificou pela última vez


            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('created_by_user')->references('user_id')->on('users');
            $table->foreign('modified_by_user')->references('user_id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_groups');
    }
};
