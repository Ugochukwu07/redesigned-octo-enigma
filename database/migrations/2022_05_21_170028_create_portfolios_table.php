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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name');
            $table->foreignId('users_id')->constrained('users', 'id')->onDelete('cascade');
            $table->text('description');
            $table->timestamps();
        });
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name');
            $table->mediumText('file');
            $table->foreignId('users_id')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->mediumText('tags');
            $table->text('description');
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
        Schema::dropIfExists('departments');
        Schema::dropIfExists('portfolios');
    }
};
