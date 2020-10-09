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
            $table->foreignId('created_by');
            $table->string('judul');
            $table->text('konten');
            $table->string('image')->after('konten');
            $table->string('image_name')->after('image');
            $table->longtext('long_content')->nullable();
            $table->foreignId('category_id');
            $table->boolean('verified')->default(false);
            $table->date('verified_at')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->integer('igdb_id')->nullable();
            $table->boolean('publish')->default(false);
            $table->date('publish_at')->nullable();
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
        Schema::dropIfExists('v_content');
    }
}
