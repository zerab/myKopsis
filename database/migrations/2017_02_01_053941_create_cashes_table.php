<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('income_id')->unsigned();
            $table->integer('outcome_id')->unsigned();
            $table->foreign('income_id')->nullable()->references('income_id')->on('incomes');
            $table->foreign('outcome_id')->nullable()->references('outcome_id')->on('outcomes');
            $table->integer('total_cash');
            $table->text('details,500')->nullable();
            $table->dateTime('date');
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
        Schema::dropIfExists('cashes');
    }
}
