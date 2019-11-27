<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssemblyDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assembly_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('local_id')->index();
            $table->integer('district_id')->index();
            $table->integer('area_id')->index();
            $table->integer('region_id')->index();
            $table->string('name')->nullable();
            $table->string('gpost')->nullable();
            $table->string('nursing')->nullable();
            $table->string('NameOfLocalPastor')->nullable();
            $table->string('NameOfPresidingElder')->nullable();
            $table->string('dateAppointPresiding')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->integer('NoMale')->nullable();
            $table->integer('noFemale')->nullable();
            $table->integer('noOfChildren')->nullable();
            $table->integer('noOfTens')->nullable();
            $table->integer('deacons')->nullable();
            $table->integer('deaconess')->nullable();
            $table->integer('elder')->nullable();
            $table->integer('totalMembership');
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
        Schema::dropIfExists('assembly_data');
    }
}
