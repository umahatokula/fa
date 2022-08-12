<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUmahaEventsRegistrations5 extends Migration
{
    public function up()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->string('gender', 255)->nullable()->change();
            $table->string('marital_status', 255)->nullable()->change();
            $table->string('email', 255)->nullable()->change();
            $table->boolean('spouse')->nullable()->change();
            $table->boolean('children')->nullable()->change();
            $table->integer('children_no')->nullable()->change();
            $table->date('arrival_date')->nullable()->change();
            $table->date('departure_date')->nullable()->change();
            $table->string('title', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('umaha_events_registrations', function($table)
        {
            $table->string('gender', 255)->nullable(false)->change();
            $table->string('marital_status', 255)->nullable(false)->change();
            $table->string('email', 255)->nullable(false)->change();
            $table->boolean('spouse')->nullable(false)->change();
            $table->boolean('children')->nullable(false)->change();
            $table->integer('children_no')->nullable(false)->change();
            $table->date('arrival_date')->nullable(false)->change();
            $table->date('departure_date')->nullable(false)->change();
            $table->string('title', 255)->nullable(false)->change();
        });
    }
}
