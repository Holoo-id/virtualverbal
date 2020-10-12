<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViverbGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_games', function (Blueprint $table) {
            $table->id();
            $table->text('code');
            $table->text('file');
            $table->string('title');
            $table->string('description_short');
            $table->string('description_long');
            $table->integer('category_games_id');
            $table->integer('point');
            $table->integer('virtual_money');
            $table->float('price');
            $table->datetime('deleted_at')->nullable();
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
        Schema::dropIfExists('v_games');
    }
}
