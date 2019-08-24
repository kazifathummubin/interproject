<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->nullable();
            $table->string('icon1')->nullable();
            $table->text('text1')->nullable();
            $table->string('icon2')->nullable();
            $table->text('text2')->nullable();
            $table->string('icon3')->nullable();
            $table->text('text3')->nullable();
            $table->string('icon4')->nullable();
            $table->text('text4')->nullable();
            $table->string('icon5')->nullable();
            $table->text('text5')->nullable();
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
        Schema::dropIfExists('home_categories');
    }
}
