<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->boolean('role')->default(false);
            $table->string('username');
            $table->string('name')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('dateOfBirth')->nullable();
            $table->string('socialLinkCode');
            $table->longText('address')->nullable();
            $table->longText('aboutUs')->nullable();
            $table->string('open')->nullable();
            $table->string('countryCode')->nullable();
            $table->string('city')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->default('default.jpg');
            $table->string('email')->unique();
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
