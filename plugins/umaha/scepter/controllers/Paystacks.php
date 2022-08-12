<?php namespace Umaha\Scepter\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Paystacks Back-end Controller
 */
class Paystacks extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        \Backend\Behaviors\ImportExportController::class
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var string Config file for Import & Export
     */
    public $importExportConfig = 'config_import_export.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Umaha.Scepter', 'scepter', 'paystacks');
    }
}
