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
        Schema::create('flatmate_task', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flatmate_id');
            $table->unsignedBigInteger('task_id');
            $table->date('executed_on');
            $table->timestamps();
        });


        Schema::table('flatmate_task', function (Blueprint $table) {
            $table->foreign('flatmate_id')->references('id')->on('flatmates');
            $table->foreign('task_id')->references('id')->on('tasks');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flatmate_task');
    }
};
