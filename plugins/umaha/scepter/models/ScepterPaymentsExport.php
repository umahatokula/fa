<?php namespace Umaha\Scepter\Models;

use Umaha\Scepter\Models\Paystack;

class ScepterPaymentsExport extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $payments = Paystack::all();


        $payments->each(function ($payment) use ($columns) {
            $payment->registrant_name = $payment->registrant->fname.' '. $payment->registrant->lname;
            $payment->registrant_location = $payment->registrant->location;
            $payment->addVisible($columns);
        });

        return $payments->toArray();
    }
}