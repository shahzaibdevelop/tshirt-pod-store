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
            $table->string('shirt_logo');
            $table->string('shirt_text');
            $table->string('text_font');
            $table->string('text_color');
            $table->string('shirt_color');
            $table->string('shirt_size');
            $table->string('final_design');



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
