<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parent_agency_id')->unsigned()->nullable();
            $table->foreign('parent_agency_id')->references('id')->on('agency');
            $table->string('name');
            $table->timestamps();
        });
        //2. Agency (id, parent_agency_id, name)

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency');
    }
}
