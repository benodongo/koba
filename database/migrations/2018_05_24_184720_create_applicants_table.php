<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
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
            $table->integer('children');
            $table->integer('dependants');
            $table->string('next_kin');
            $table->string('kin_relationship');
            $table->string('kin_id');
            $table->string('kin_tel');
            $table->string('county');
            $table->string('location');
            $table->string('road_street');
            $table->string('house_no');
            $table->string('name_of_entity');
            $table->string('year_of_reg');
            $table->string('reg_no');
            $table->string('licence_no');
            $table->string('name_of_bs');
            $table->string('pin');
            $table->string('bs_address');
            $table->string('bs_tel');
            $table->string('bs_description');
            $table->string('employer');
            $table->integer('staff_no');
            $table->string('title');
            $table->string('department');
            $table->string('branch');
            $table->integer('no_of_employees');
            $table->string('employement_terms');
            $table->string('g_fname');
            $table->string('g_mname');
            $table->string('g_lname');
            $table->string('g_nationality');
            $table->string('g_dob');
            $table->string('g_kra_pin');
            $table->string('g_gender');
            $table->string('g_national_id');
            $table->string('g_marital_status');
            $table->string('g_education');
            $table->integer('g_occupation');
            $table->string('g_relationship');
            $table->string('g_email');
            $table->string('g_tel');
            $table->string('g_county');
            $table->string('g_location');
            $table->string('g_road_street');
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
        Schema::dropIfExists('applicants');
    }
}
