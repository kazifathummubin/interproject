<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->nullable();
            $table->text('service1')->nullable();
            $table->text('service2')->nullable();
            $table->text('service3')->nullable();
            $table->longText('service_content1')->nullable();
            $table->longText('service_content2')->nullable();
            $table->longText('service_content3')->nullable();
            $table->string('service_photo1')->nullable();
            $table->string('service_photo2')->nullable();
            $table->string('service_photo3')->nullable();
            $table->string('service_photo4')->nullable();
            $table->string('service_photo5')->nullable();
            $table->string('service_photo6')->nullable();
            $table->string('service_photo7')->nullable();
            $table->string('service_photo8')->nullable();
            $table->string('service_photo9')->nullable();
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
        Schema::dropIfExists('services');
    }
}
