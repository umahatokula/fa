<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsRegistrations4 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->string('children_ages')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->dropColumn('children_ages');
        });
    }
}
