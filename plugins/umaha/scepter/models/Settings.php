<?php namespace Umaha\Scepter\Models;

use October\Rain\Database\Model;

class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'umaha_scepter_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    /**
     * Validation rules
     */
    public $rules = [
        'amount' => 'required',
    ];

    public $attachOne = [
        'dp_bg' => ['System\Models\File', 'public' => false]
    ];
}
