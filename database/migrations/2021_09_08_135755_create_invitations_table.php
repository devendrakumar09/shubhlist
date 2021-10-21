<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            /**Block With Image */
            $table->string('heading_1')->nullable();
            $table->string('quote_1')->nullable();
            $table->string('image_1')->nullable();
            
            $table->string('heading_2')->nullable();
            $table->string('quote_2')->nullable();
            $table->string('image_2')->nullable();

            $table->string('heading_3')->nullable();
            $table->string('quote_3')->nullable();
            $table->string('image_3')->nullable();

            /**Block Wthout Image */

            $table->string('heading_4')->nullable();
            $table->string('quote_4')->nullable();

            $table->string('heading_5')->nullable();
            $table->string('quote_5')->nullable();

            $table->string('heading_6')->nullable();
            $table->string('quote_6')->nullable();

            $table->string('heading_7')->nullable();
            $table->string('quote_7')->nullable();

            $table->string('heading_8')->nullable();
            $table->string('quote_8')->nullable();
            
            $table->string('heading_9')->nullable();
            $table->string('quote_9')->nullable();

            $table->string('heading_10')->nullable();
            $table->string('quote_10')->nullable();

            /**Memories */
            $table->string('memories_1')->nullable();
            $table->string('memories_2')->nullable();
            $table->string('memories_3')->nullable();
            $table->string('memories_4')->nullable();

            $table->string('slug');

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
        Schema::dropIfExists('invitations');
    }
}
