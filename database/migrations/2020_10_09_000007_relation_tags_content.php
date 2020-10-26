<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationTagsContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_relation_tags_content', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id');
            $table->foreignId('tag_id')->nullable();

            $table->foreign('content_id')
                ->references('id')
                ->on('v_content')
                ->onDelete('cascade');

            $table->foreign('tag_id')
                ->references('id')
                ->on('v_topics')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_relation_tags_content');
    }
}
