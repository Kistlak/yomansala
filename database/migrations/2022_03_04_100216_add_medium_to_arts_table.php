<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMediumToArtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('art', function (Blueprint $table) {
            $table->string('year')->nullable()->after('description1');
            $table->string('medium')->nullable()->after('description1');
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
            $table->dropColumn('medium');
            $table->dropColumn('year');
        });
    }
}
