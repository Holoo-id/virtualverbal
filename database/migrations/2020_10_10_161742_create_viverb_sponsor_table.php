<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViverbSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_sponsor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('website');
            $table->string('image');
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            
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
        Schema::dropIfExists('v_sponsor');
    }
}
