<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyViverbContentCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('v_content_comments', function (Blueprint $table) {
            //
            $table->foreign('updated_by')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
            $table->foreign('report_by')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

            $table->foreign('content_id')
                ->references('id')
                ->on('v_content')
                ->onDelete('cascade');
                
            // $table->foreign('reply_id')
            //     ->references('id')
            //     ->on('v_content')
            //     ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('v_content_comments', function (Blueprint $table) {
            //
        });
    }
}
