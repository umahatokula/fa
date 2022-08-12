<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePersonalizedDPsTable extends Migration
{
    public function up()
    {
        Schema::create('umaha_events_personalized_d_ps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->integer('x_position')->nullable();
            $table->integer('y_position')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umaha_events_personalized_d_ps');
    }
}
