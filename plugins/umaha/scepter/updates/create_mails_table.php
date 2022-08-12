<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMailsTable extends Migration
{
    public function up()
    {
        Schema::create('umaha_events_mails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umaha_events_mails');
    }
}
