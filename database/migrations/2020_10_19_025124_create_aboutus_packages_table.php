<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('imageAboutus1');
            $table->string('paragraphAboutus1');
            $table->string('paragraphAboutus2');
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
        Schema::dropIfExists('aboutus_packages');
    }
}
