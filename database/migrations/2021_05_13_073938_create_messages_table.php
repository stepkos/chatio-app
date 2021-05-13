<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_sender_id');
            $table->unsignedBigInteger('user_recipient_id');
            $table->foreign('user_sender_id')->references('id')->on('users');
            $table->foreign('user_recipient_id')->references('id')->on('users');

            $table->text('message');

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
        Schema::table('messages', function(Blueprint $table) {
            $table->dropForeign([
                'user_sender_id',
                'user_recipient_id'
            ]);
        });

        Schema::dropIfExists('messages');
    }
}
