<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->integer('health_card');
            $table->string('family_physician');
            $table->integer('phone_number');
            $table->boolean('is_client');
            $table->boolean('is_first_time');
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
        Schema::drop('children');
    }
}
