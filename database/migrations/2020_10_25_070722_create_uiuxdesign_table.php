<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUiuxdesignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uiux_design', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titleuiux');
            $table->string('paragraphuiux');
            $table->text('imageuiux');
            $table->text('facebookuiux');
            $table->text('emailuiux');
            $table->text('whatsappuiux');
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
        Schema::dropIfExists('uiux_design');
    }
}
