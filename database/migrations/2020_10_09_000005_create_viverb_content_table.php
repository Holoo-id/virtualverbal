<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViverbContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_content', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
            $table->string('judul');
            $table->longtext('konten');
            $table->text('sub_judul');
            $table->string('permalink');
            $table->text('image_path')->nullable();
            $table->string('image_name')->nullable();
            $table->foreignId('category_id');
            $table->integer('igdb_id')->nullable();
            $table->boolean('published')->default(false);
            $table->date('publish_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_content');
    }
}
