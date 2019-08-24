<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('aboutcontentimage')->nullable();
            $table->text('aboutcontent')->nullable();
            $table->text('ourteam_title')->nullable();
            $table->string('ourteam_photo1')->nullable();
            $table->text('ourteam1')->nullable();
            $table->string('ourteam_photo2')->nullable();
            $table->text('ourteam2')->nullable();
            $table->string('ourteam_photo3')->nullable();
            $table->text('ourteam3')->nullable();
            $table->text('ourclint_title')->nullable();
            $table->string('ourclint_photo1')->nullable();
            $table->string('ourclint_photo2')->nullable();
            $table->string('ourclint_photo3')->nullable();
            $table->string('ourclint_photo4')->nullable();
            $table->string('ourclint_photo5')->nullable();
            $table->string('ourclint_photo6')->nullable();
            $table->string('ourclint_photo7')->nullable();
            $table->string('ourclint_photo8')->nullable();
            $table->string('ourclint_photo9')->nullable();
            $table->string('ourclint_photo10')->nullable();
            $table->string('ourclint_photo11')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
