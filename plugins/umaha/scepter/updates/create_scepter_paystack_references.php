<?php namespace Umaha\Scepter\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class createScepterPaystackReferences extends Migration
{
    public function up()
    {
        Schema::create('umaha_scepter_paystack_references', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('authorization_url')->nullable();
            $table->string('access_code')->nullable();
            $table->string('reference')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umaha_scepter_paystack_references');
    }
}
