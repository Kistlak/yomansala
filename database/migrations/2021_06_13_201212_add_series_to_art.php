<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeriesToArt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('art', function (Blueprint $table) {
            $table->unsignedBigInteger('series_id');
            $table->foreign('series_id')->references('id')->on('series')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('art', function (Blueprint $table) {
            //
        });
    }
}
