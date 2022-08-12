<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsRegistrations8 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->string('cfc_center', 255)->nullable();
            $table->string('service_team', 255)->nullable();
            $table->string('position_held', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->dropColumn('cfc_center');
            $table->dropColumn('service_team');
            $table->dropColumn('position_held');
        });
    }
}
