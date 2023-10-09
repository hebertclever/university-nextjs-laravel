<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id('log_id');
            $table->text('log');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('date');
            $table->time('time');
            $table->ipAddress('ip');
            $table->string('operating_system');
            $table->string('browser');

            // Foreign Key
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
