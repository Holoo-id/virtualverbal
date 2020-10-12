<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViverbHistoryGamesDownloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_history_games_download', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('game_id');
            $table->boolean('is_point')->default(false);
            $table->boolean('is_vm')->default(false);
            $table->boolean('is_price')->default(false);
            $table->boolean('total')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_history_games_download');
    }
}
