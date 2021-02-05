<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBussinesanalysisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bussines_analysis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titleba');
            $table->string('paragraphba');
            $table->text('imageba');
            $table->text('facebookba');
            $table->text('emailba');
            $table->text('whatsappba');
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
        Schema::dropIfExists('bussines_analysis');
    }
}
