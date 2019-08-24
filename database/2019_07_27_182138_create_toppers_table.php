<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToppersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toppers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon1')->nullable();
            $table->text('itext1')->nullable();
            $table->string('icon2')->nullable();
            $table->text('itext2')->nullable();
            $table->string('flag1')->nullable();
            $table->text('ftext1')->nullable();
            $table->string('flag2')->nullable();
            $table->text('ftext2')->nullable();
            $table->string('flag3')->nullable();
            $table->text('ftext3')->nullable();
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
        Schema::dropIfExists('toppers');
    }
}
