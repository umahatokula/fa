<?php namespace Umaha\Scepter\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateScepterPaystackPayments extends Migration
{
    public function up()
    {
        Schema::create('umaha_scepter_paystack_payments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('trxn_id')->nullable();
            $table->string('domain')->nullable();
            $table->string('status')->nullable();
            $table->string('reference')->nullable();
            $table->string('amount')->nullable();
            $table->string('message')->nullable();
            $table->string('gateway_response')->nullable();
            $table->string('paid_at')->nullable();
            $table->string('channel')->nullable();
            $table->string('currency')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_code')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umaha_scepter_paystack_payments');
    }
}
