<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsSchedules extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_schedules', function($table)
        {
            $table->text('schedules')->nullable();
            $table->time('start')->nullable()->change();
            $table->time('end')->nullable()->change();
            $table->string('preacher_slug', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_schedules', function($table)
        {
            $table->dropColumn('schedules');
            $table->time('start')->nullable(false)->change();
            $table->time('end')->nullable(false)->change();
            $table->string('preacher_slug', 255)->nullable(false)->change();
        });
    }
}
