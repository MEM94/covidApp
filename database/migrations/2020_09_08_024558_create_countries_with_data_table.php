<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesWithDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries_with_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('cases');
            $table->integer('todayCases');
            $table->integer('deaths');
            $table->integer('todayDeaths');
            $table->integer('recovered');
            $table->integer('active');
            $table->integer('critical');
            $table->integer('casesPerOneMillion');
            $table->integer('deathsPerOneMillion');
            $table->integer('totalTests');
            $table->integer('testsPerOneMillion');
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
        Schema::dropIfExists('countries_with_data');
    }
}
