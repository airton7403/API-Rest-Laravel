<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->bigInteger('phone');
            $table->bigInteger('mobile_phone');
            $table->bigInteger('individual_legal_registration');
            $table->integer('kind_person');
            $table->string('logo_photo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('address');
            $table->integer('address_number');
            $table->string('address_complement')->nullable();
            $table->string('state');
            $table->string('city');
            $table->string('neighborhood');
            $table->integer('zipcode');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
