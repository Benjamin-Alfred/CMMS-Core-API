<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MFL_code', 20);
            $table->string('name', 255);
            $table->string('registration_number', 50)->nullable();
            $table->string('KEPH_level', 15)->nullable();
            $table->string('facility_type', 100);
            $table->string('owner');
            $table->string('regulatory_body');
            $table->smallInteger('beds')->unsigned()->default(0);
            $table->smallInteger('cots')->unsigned()->default(0);
            $table->string('county', 100);
            $table->string('constituency', 100);
            $table->string('sub_county', 100);
            $table->string('ward', 100);
            $table->boolean('operation_status')->default(true);
            $table->boolean('open_whole_day')->default(true);
            $table->boolean('open_public_holidays')->default(true);
            $table->boolean('open_weekends')->default(true);
            $table->boolean('open_late_night')->default(true);
            $table->string('service_names');
            $table->boolean('approved')->default(true);
            $table->boolean('public_visible')->default(true);
            $table->boolean('closed')->default(true);
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facilities');
    }
}
