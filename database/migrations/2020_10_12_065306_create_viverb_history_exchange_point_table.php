<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViverbHistoryExchangePointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_history_exchange_point', function (Blueprint $table) {
            $table->id();
            $table->integer('point');
            $table->integer('virtual_money');
            $table->foreignId('user_id');
            $table->text('id_exchange');
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
        Schema::dropIfExists('v_history_exchange_point');
    }
}
