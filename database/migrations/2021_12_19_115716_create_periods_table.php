<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            // https://laravel.com/docs/8.x/migrations#available-column-types --------------------------------> type
            $table->id();
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->date('start');
            $table->integer('user_id')->unsigned();
            $table->enum('status', ['paid', 'await']);
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
        Schema::dropIfExists('periods');
    }
}
