<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsRegistrations extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->string('event_slug')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->dropColumn('event_slug');
            $table->increments('id')->unsigned()->change();
        });
    }
}
