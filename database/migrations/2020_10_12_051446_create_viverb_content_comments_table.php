<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViverbContentCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_content_comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->foreignId('content_id');
            $table->foreignId('reply_id')->nullable();
            $table->foreignId('created_by');
            $table->foreignId('updated_by')->nullable();
            $table->string('report')->nullable();
            $table->foreignId('report_by')->nullable();
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
        Schema::dropIfExists('v_content_comments');
    }
}
