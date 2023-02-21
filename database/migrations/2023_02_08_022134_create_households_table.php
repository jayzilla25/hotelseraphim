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
        Schema::create('households', function (Blueprint $table) {
            $table->id();
            $table->string('household_head');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->foreignId('zone_id');
            $table->string('street_address');
            $table->string('ownership_status');
            $table->string('dwelling_type');
            $table->string('water_source');
            $table->string('lighting_source');
            $table->string('toilet_type');
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
        Schema::dropIfExists('households');
    }
};
