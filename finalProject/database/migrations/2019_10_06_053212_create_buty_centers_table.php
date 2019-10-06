<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateButyCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buty_centers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('category_id')->unsigned();
            $table->string('description');
            $table->string('image');
            $table->string('address');
            $table->string('mobile');
            $table->string('watts');
            $table->string('facebook');
            $table->string('enestegram');
            $table->string('snapChat');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buty_centers');
    }
}
