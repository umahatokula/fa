<?php namespace Umaha\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmahaEvents extends Migration
{
    public function up()
    {
        Schema::create('umaha_events_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('venue')->nullable();
            $table->string('email', 255)->nullable(false)->change();
            $table->string('phone', 255)->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->integer('centre_id')->nullable();
            $table->boolean('is_register')->default(1);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umaha_events_');
    }
}
