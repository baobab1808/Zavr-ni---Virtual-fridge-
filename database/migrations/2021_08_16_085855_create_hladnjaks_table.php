<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHladnjaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hladnjaks', function (Blueprint $table) {
            $table->id();
            $table->string('food_name');
            $table->string('category');
            $table->float('quantity', 8, 2);
            $table->string('measurement_unit');
            $table->integer('user_id');
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
        Schema::dropIfExists('hladnjaks');
    }
}
