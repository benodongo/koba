<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('amount_words');
            $table->string('amount_figures');
            $table->string('loan_amount');
            $table->string('interest_rate');
            $table->string('interest_amount');
            $table->string('total');
            $table->string('loan_period');
            $table->string('disbursement_mode');
            $table->string('loan_product');
            $table->string('applicant_id');
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
        Schema::dropIfExists('loans');
    }
}
