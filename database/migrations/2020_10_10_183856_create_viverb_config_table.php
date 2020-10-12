<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViverbConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_configuration', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('point_post')->default(0);
            $table->integer('point_verified')->default(0);
            $table->integer('point_publish')->default(0);
            $table->integer('convertion_point')->default(1);
            $table->integer('convertion_point_minimum')->default(0);
            $table->integer('convertion_point_maximum')->default(0);
            $table->integer('convertion_point_multiple')->default(0);
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
        Schema::dropIfExists('v_configuration');
    }
}
