<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsProbaTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_proba', function (Blueprint $table) {
            $table->unsignedBigInteger('ingredients_id')->index();
            $table->foreign('ingredients_id')->references('id')->on('ingredients')->onDelete('cascade');
            $table->unsignedBigInteger('proba_id')->unsigned()->index();
            $table->foreign('proba_id')->references('id')->on('probas')->onDelete('cascade');
            $table->primary(['ingredients_id', 'proba_id']);
            $table->float('quantity', 8, 2);
            $table->string('measurement_unit');
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
        Schema::dropIfExists('ingredients_proba');
    }
}
