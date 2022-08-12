<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsRegistrations3 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->integer('event_registration_number');
            $table->boolean('coming_with_car')->nullable()->default(0);
            $table->boolean('assist_with_car')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->dropColumn('event_registration_number');
            $table->dropColumn('coming_with_car');
            $table->dropColumn('assist_with_car');
        });
    }
}
