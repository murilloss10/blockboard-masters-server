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
        Schema::create('room_matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->unsignedBigInteger('user_player_1');
            $table->foreign('user_player_1')->references('id')->on('users');
            $table->unsignedBigInteger('user_player_2')->nullable();
            $table->foreign('user_player_2')->references('id')->on('users');
            $table->integer('player_1_left_time_in_seconds')->default(0);
            $table->integer('player_2_left_time_in_seconds')->default(0);
            $table->unsignedBigInteger('user_player_winner')->nullable();
            $table->foreign('user_player_winner')->references('id')->on('users');
            $table->unsignedBigInteger('user_player_loser')->nullable();
            $table->foreign('user_player_loser')->references('id')->on('users');
            $table->string('scoreboard', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_matches');
    }
};
