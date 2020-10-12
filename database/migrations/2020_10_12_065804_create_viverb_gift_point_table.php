<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViverbGiftPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_gift_point', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('objective');
            $table->integer('point');
            $table->boolean('active')->default(true);
            $table->datetime('expired_at')->nullable();
            $table->text('code');
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
        Schema::dropIfExists('v_gift_point');
    }
}
