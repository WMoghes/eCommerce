<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bu_name', 100);
            $table->string('bu_price', 25);
            $table->tinyInteger('bu_rent');
            $table->string('bu_square', 100);
            $table->tinyInteger('bu_type');
            $table->string('bu_small_desc');
            $table->string('bu_meta');
            $table->tinyInteger('bu_status');
            $table->string('bu_longitude', 30);
            $table->string('bu_latitude', 30);
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
        Schema::drop('buildings');
    }
}
