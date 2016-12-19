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
            $table->integer('bu_price', 25);
            $table->tinyInteger('bu_rent');
            $table->string('bu_square', 100);
            $table->tinyInteger('bu_room');
            $table->tinyInteger('bu_type');
            $table->string('bu_small_desc');
            $table->text('bu_long_desc');
            $table->string('bu_meta');
            $table->string('bu_region');
            $table->tinyInteger('bu_status');
            $table->string('image')->nullable();
            $table->string('bu_longitude', 30);
            $table->string('bu_latitude', 30);
            $table->tinyInteger('user_id');
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
