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
        Schema::create('student_group_members', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('student_id'); // Estudantes são usuários, então referenciamos a tabela de usuários


            $table->foreign('group_id')->references('group_id')->on('student_groups')->onDelete('cascade');
            $table->foreign('student_id')->references('user_id')->on('users')->onDelete('cascade');

           
            $table->primary(['group_id', 'student_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_group_members');
    }
};
