<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t1');
            $table->text('d1');
            $table->string('i1');
            $table->string('t2');
            $table->text('d2');
            $table->string('i2');
            $table->string('t3');
            $table->text('d3');
            $table->string('i3');
            $table->string('t4');
            $table->text('d4');
            $table->string('i4');
            $table->string('i5');
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
        Schema::dropIfExists('feature');
    }
}
