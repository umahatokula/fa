<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmahaEventsEventPreacher extends Migration
{
    public function up()
    {
        Schema::create('umaha_events_event_preacher', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('event_id');
            $table->integer('preacher_id');
            $table->primary(['event_id','preacher_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umaha_events_event_preacher');
    }
}
