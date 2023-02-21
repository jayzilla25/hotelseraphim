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
        Schema::create('barangayofficials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_id');
            $table->string('barangayofficial_name');
            $table->string('role');
            $table->date('term_start');
            $table->date('term_end');
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
        Schema::dropIfExists('barangayofficials');
    }
};
