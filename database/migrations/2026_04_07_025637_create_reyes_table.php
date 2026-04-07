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
        Schema::create('reyes', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->string('lvl');
            $table->string('phone');
            $table->string('schet');
            $table->string('ts1');
            $table->string('ts2');
            $table->string('ts3');
            $table->string('ts4');
            $table->string('ts5');
            $table->string('home1');
            $table->string('home2');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reyes');
    }
};
