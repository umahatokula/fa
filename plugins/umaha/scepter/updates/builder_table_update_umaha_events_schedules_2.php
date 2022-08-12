<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsSchedules2 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_schedules', function($table)
        {
            $table->boolean('is_active')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_schedules', function($table)
        {
            $table->dropColumn('is_active');
        });
    }
}
