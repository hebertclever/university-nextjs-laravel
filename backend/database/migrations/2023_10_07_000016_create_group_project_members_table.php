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
        Schema::create('group_project_members', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('project_id')->references('project_id')->on('group_projects');
            $table->foreign('user_id')->references('user_id')->on('users');

            $table->primary(['project_id', 'user_id']); // Composite primary key
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_project_members');
    }
};
