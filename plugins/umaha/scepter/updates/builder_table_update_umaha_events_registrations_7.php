<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsRegistrations7 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->integer('event_registration_number')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->integer('event_registration_number')->nullable(false)->change();
        });
    }
}
