<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyViverbContentCommentsLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('v_content_comments_likes', function (Blueprint $table) {
            //
            $table->foreign('content_id')
                ->references('id')
                ->on('v_content')
                ->onDelete('cascade');
                
            $table->foreign('comment_id')
                ->references('id')
                ->on('v_content_comments')
                ->onDelete('cascade');

                $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('v_content_comments_likes', function (Blueprint $table) {
            //
        });
    }
}
