<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix');
            $table->date('b_date');
            $table->string('b_place');
            $table->string('gender');
            $table->string('religion');
            $table->string('nationality');
            $table->string('citizenship');
            $table->string('civil_status');
            $table->string('blood_type');
            $table->boolean('has_philhealth');
            $table->string('occupation');
            $table->string('employment_status');
            $table->bigInteger('monthly_income');
            $table->string('educational_attainment');
            $table->string('mailing_address');
            $table->foreignId('household_id');
            $table->string('relation_to_head');
            $table->foreignId('user_id');
            $table->string('contact_email');
            $table->string('contact_phone');
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
        Schema::dropIfExists('residents');
    }
};
