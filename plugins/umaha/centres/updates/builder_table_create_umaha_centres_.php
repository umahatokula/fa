<?php namespace Umaha\Centres\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUmahaCentres extends Migration
{
    public function up()
    {
        Schema::create('umaha_centres_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('pastor');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('umaha_centres_');
    }
}
