<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('period_items', function (Blueprint $table) {
            // https://laravel.com/docs/8.x/migrations#available-column-types --------------------------------> type
            $table->id();
            $table->integer('period_id')->unsigned();
            $table->integer('charity_id')->unsigned();
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
        Schema::dropIfExists('period_items');
    }
}
