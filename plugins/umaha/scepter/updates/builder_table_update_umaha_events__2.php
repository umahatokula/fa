<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEvents2 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_', function($table)
        {
            $table->time('start_time')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_', function($table)
        {
            $table->dropColumn('start_time');
        });
    }
}
