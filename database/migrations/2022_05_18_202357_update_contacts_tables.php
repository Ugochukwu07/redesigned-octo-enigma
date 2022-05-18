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
        Schema::table('ticket_question', function(Blueprint $table){
            $table->boolean('read')->default(0);
            $table->boolean('archive')->default(0);
        });

        Schema::table('contact_us', function(Blueprint $table){
            $table->boolean('read')->default(0);
            $table->boolean('archive')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket_question', function(Blueprint $table){
            $table->dropColumn(['read', 'archive']);
        });
        Schema::table('contact_us', function(Blueprint $table){
            $table->dropColumn(['read', 'archive']);
        });
    }
};
