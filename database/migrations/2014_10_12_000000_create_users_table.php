<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('medical_aid_no')->nullable();
            $table->string('medical_aid')->nullable();
            $table->string('occupation')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('surname');
            $table->string('name');
            $table->string('omang')->unique();
            $table->string('email')->unique();
            $table->integer('role_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
