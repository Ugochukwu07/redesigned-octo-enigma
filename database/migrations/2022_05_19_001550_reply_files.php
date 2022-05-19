<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_files', function(Blueprint $table){
            $table->increments('id');
            $table->foreignId('users_id')->constrained('users', 'id')->onDelete('cascade');
            $table->string('ticket_id');
            $table->string('filename');
            $table->string('location');
            $table->string('table');
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
        Schema::dropIfExists('reply_files');
    }
};
