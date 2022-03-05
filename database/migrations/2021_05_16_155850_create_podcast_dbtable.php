<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastDbtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcast', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('img')->nullable();
            $table->longText('logo')->nullable();
            $table->longText('description')->nullable();
            $table->longText('applePodcastLink')->nullable();
            $table->longText('spotifyLink')->nullable();
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
        Schema::dropIfExists('podcast');
    }
}
