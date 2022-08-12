<?php namespace Umaha\Scepter\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePersonalizedDpsTable extends Migration
{
    public function up()
    {
        Schema::create('umaha_scepter_personalized_dps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email')->nullable();
            $table->string('dp_url')->nullable();
            $table->string('reg_number')->nullable();
            $table->string('event_code')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umaha_scepter_personalized_dps');
    }
}
