<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->nullable();
            $table->string('level','3')->nullable();
            $table->string('fullname');
            $table->string('username','30');
            $table->string('gender','10');
            $table->string('birthdate','24')->nullable();
            $table->string('birthmonth','24')->nullable();
            $table->string('birthyear','24')->nullable();
            $table->string('password');
            $table->string('email', '30');
            $table->string('phone','15')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('members');
    }
}
