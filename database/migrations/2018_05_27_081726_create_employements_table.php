<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employer');
            $table->integer('staff_no');
            $table->string('title');
            $table->string('department');
            $table->string('branch');
            $table->integer('no_of_employees');
            $table->string('employement_terms');
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
        Schema::dropIfExists('employements');
    }
}
