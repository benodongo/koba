<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('nationality');
            $table->string('dob');
            $table->string('kra_pin');
            $table->string('gender');
            $table->string('national_id');
            $table->string('marital_status');
            $table->string('education');
            $table->integer('occupation');
            $table->string('relationship');
            $table->string('email');
            $table->string('tel');
            $table->string('county');
            $table->string('location');
            $table->string('road_street');
            $table->integer('applicant_id');
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
        Schema::dropIfExists('guarantors');
    }
}
