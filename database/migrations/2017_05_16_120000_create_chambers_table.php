<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChambersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('chamber_name')->nullable();
            $table->string('chamber_address')->nullable();
            $table->string('chamber_phone')->nullable();
            $table->string('app_day_start')->nullable();
            $table->string('app_day_end')->nullable();
            $table->string('app_time_start')->nullable();
            $table->string('app_time_end')->nullable();
            $table->string('new_patient')->nullable();
            $table->string('returning_patient')->nullable();
            $table->string('followup_report')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
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
        Schema::dropIfExists('chambers');
    }
}
