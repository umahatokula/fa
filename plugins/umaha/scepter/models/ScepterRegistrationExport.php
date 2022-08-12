<?php namespace Umaha\Scepter\Models;

use Umaha\Scepter\Models\ScepterRegistration;

class ScepterRegistrationExport extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $registrants = ScepterRegistration::all();

        $registrants = $registrants->unique('email');

        $registrants->each(function ($registrant) use ($columns) {
            $registrant->materials = $registrant->materials ? 'Yes' : 'No';
            $registrant->is_cfc_member = $registrant->is_cfc_member ? 'Yes' : 'No';
            $registrant->addVisible($columns);
        });

        return $registrants->toArray();
    }
}