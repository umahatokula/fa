<?php namespace Umaha\Scepter\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateScepterRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('umaha_scepter_scepter_registrations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('reg_number')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->boolean('materials')->nullable()->comment('Does attendee want trainingg or not');
            $table->string('is_cfc_member')->nullable();
            $table->string('cfc_campus')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umaha_scepter_scepter_registrations');
    }
}
