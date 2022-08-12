<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEvents3 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_', function($table)
        {
            $table->integer('church_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_', function($table)
        {
            $table->dropColumn('church_id');
        });
    }
}
