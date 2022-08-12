<?php namespace Umaha\Centres\Models;

use Model;

/**
 * Model
 */
class Centre extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umaha_centres_';

    public $hasMany = [
        'events' => 'Umaha\Events\Models\Event'
    ];
}
