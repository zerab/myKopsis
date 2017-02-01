<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id');
            $table->string('fullname','50');
            $table->string('username','30');
            $table->string('gender','10');
            $table->string('birthdate','24');
            $table->string('birthplace', '24');
            $table->string('password', '24');
            $table->string('email', '30');
            $table->string('phone','15');
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
        Schema::dropIfExists('admins');
    }
}
