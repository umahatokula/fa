<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEvents4 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_', function($table)
        {
            $table->integer('church')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_', function($table)
        {
            $table->dropColumn('church');
        });
    }
}
