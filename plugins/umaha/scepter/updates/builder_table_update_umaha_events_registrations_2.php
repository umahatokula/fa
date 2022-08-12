<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsRegistrations2 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->boolean('accommodation')->nullable()->change();
            $table->boolean('feeding')->nullable()->change();
            $table->boolean('transportation')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->boolean('accommodation')->nullable(false)->change();
            $table->boolean('feeding')->nullable(false)->change();
            $table->boolean('transportation')->nullable(false)->change();
        });
    }
}
