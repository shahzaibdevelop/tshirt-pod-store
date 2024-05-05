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
        Schema::create('shirt_designs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('shirt_logo')->nullable();
            $table->string('shirt_text')->nullable();
            $table->string('text_font')->nullable();
            $table->string('text_color')->nullable();
            $table->string('shirt_color');
            $table->string('shirt_size');
            $table->string('final_design');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->integer('status')->comment('0=Ordered,1=Shipping,2=Delivered')->default(0);
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
        Schema::dropIfExists('shirt_designs');
    }
};
