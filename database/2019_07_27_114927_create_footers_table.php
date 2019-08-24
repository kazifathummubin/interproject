<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('footerbackground')->nullable();
            $table->string('footerimage1')->nullable();
            $table->string('footerimage2')->nullable();
            $table->string('footerimage3')->nullable();
            $table->string('footerimage4')->nullable();
            $table->string('footerimage5')->nullable();
            $table->string('footerimage6')->nullable();
            $table->string('footerimage7')->nullable();
            $table->string('footerimage8')->nullable();
            $table->text('footertext')->nullable();
            $table->string('footericon1')->nullable();
            $table->string('footericon2')->nullable();
            $table->string('footericon3')->nullable();
            $table->string('footericon4')->nullable();
            $table->string('footericon5')->nullable();
            $table->text('text1')->nullable();
            $table->text('text2')->nullable();
            $table->text('text3')->nullable();
            $table->text('text4')->nullable();
            $table->text('copyright')->nullable();
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
        Schema::dropIfExists('footers');
    }
}
