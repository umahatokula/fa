<?php

use Illuminate\Http\Request;
use Umaha\Scepter\Models\Settings;
use Umaha\Scepter\Models\ScepterRegistration;

Route::get('umaha/scepter/payment/save', function () {

    $reference = input('reference') ?: '';
    // dd($reference);

    if (!$reference) {
        die('No reference supplied');
    }

    // initiate the Library's Paystack Object
    $paystack = new Yabacon\Paystack(Settings::get('paystack_sk_key'));
    try {
        // verify using the library
        $tranx = $paystack->transaction->verify([
            'reference' => $reference, // unique to transactions
        ]);
    } catch (\Yabacon\Paystack\Exception\ApiException $e) {
        print_r($e->getResponseObject());
        die($e->getMessage());
    }

    DB::table('umaha_scepter_paystack_payments')->insert(
        [
            'trxn_id'          => $tranx->data->id,
            'domain'           => $tranx->data->domain,
            'status'           => $tranx->data->status,
            'reference'        => $tranx->data->reference,
            'amount'           => $tranx->data->amount,
            'message'          => $tranx->data->message,
            'gateway_response' => $tranx->data->gateway_response,
            'paid_at'          => $tranx->data->paid_at,
            'channel'          => $tranx->data->channel,
            'currency'         => $tranx->data->currency,
            'ip_address'       => $tranx->data->ip_address,
            'customer_email'   => $tranx->data->customer->email,
            'customer_code'    => $tranx->data->customer->customer_code,
        ]
    );

    if ('success' === $tranx->data->status) {

        Event::fire('umaha.scepter.paystack.successful', [$tranx->data]);

        $email = $tranx->data->customer->email;
    
        $reg = ScepterRegistration::where('email', $email)->first();

        return redirect('/scepter-registration-success/'.$reg->email);
    }

    return redirect('/no-success');
});


function verify_transaction($reference)
{

    if (!$reference) {
        die('No reference supplied');
    }

    // initiate the Library's Paystack Object
    $paystack = new Yabacon\Paystack(Settings::get('paystack_sk_key'));
    try {
        // verify using the library
        return  $paystack->transaction->verify([
            'reference' => $reference, // unique to transactions
        ]);
    } catch (\Yabacon\Paystack\Exception\ApiException $e) {
        print_r($e->getResponseObject());
        die($e->getMessage());
    }
}
