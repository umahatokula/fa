<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmahaEventsRegistrations extends Migration
{
    public function up()
    {
        Schema::create('umaha_events_registrations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->boolean('is_partner')->nullable()->default(0);
            $table->string('occupation')->nullable();
            $table->string('address')->nullable();
            $table->string('church_name')->nullable();
            $table->string('pastor_name')->nullable();
            $table->boolean('spouse')->default(0);
            $table->boolean('children')->default(0);
            $table->integer('children_no')->default(0);
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->boolean('accommodation')->default(0);
            $table->boolean('feeding')->default(0);
            $table->boolean('transportation')->default(0);
            $table->string('title');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umaha_events_registrations');
    }
}
