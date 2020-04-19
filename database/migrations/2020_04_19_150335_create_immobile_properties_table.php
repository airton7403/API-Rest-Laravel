<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmobilePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobile_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('immobile_id');
            
            $table->string('immobile_address');
            $table->integer('immobile_address_number');
            $table->string('immobile_address_complement');
            $table->string('immobile_state');
            $table->string('immobile_city');
            $table->string('immobile_neighborhood');
            $table->integer('immobile_property');
            $table->decimal('price', 8, 2);
            $table->integer('building_area');
            $table->integer('total_area');
            $table->integer('suites')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('parking_spaces')->nullable();
            $table->integer('pool')->nullable();
            $table->integer('furnished')->nullable();
            $table->integer('barbecue_grill')->nullable();
            $table->timestamps();

            $table->foreign('immobile_id')->references('id')->on('immobiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immobile_properties');
    }
}
