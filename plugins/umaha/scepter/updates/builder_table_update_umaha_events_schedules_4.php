<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsSchedules4 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_schedules', function($table)
        {
            $table->boolean('is_active')->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_schedules', function($table)
        {
            $table->boolean('is_active')->default(0)->change();
        });
    }
}
