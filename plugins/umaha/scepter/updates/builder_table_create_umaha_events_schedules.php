<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmahaEventsSchedules extends Migration
{
    public function up()
    {
        Schema::create('umaha_events_schedules', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->time('start');
            $table->time('end');
            $table->string('event_slug');
            $table->string('preacher_slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umaha_events_schedules');
    }
}
