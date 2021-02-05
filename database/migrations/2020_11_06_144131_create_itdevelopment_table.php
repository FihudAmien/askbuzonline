<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItdevelopmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('it_development', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('titleit');
            $table->string('paragraphit');
            $table->text('imageit');
            $table->text('facebookit');
            $table->text('emailit');
            $table->text('whatsappit');
            $table->softdeletes();
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
        Schema::dropIfExists('it_development');
    }
}
