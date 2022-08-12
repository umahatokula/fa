<?php namespace Umaha\Scepter\Models;

use Model;
use System\Models\File;

/**
 * ScepterRegistration Model
 */
class ScepterRegistration extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umaha_events_registrations';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        // 'title'            => 'required',
        'name'            => 'required',
        // 'email'           => 'email',
        // 'phone'           => 'required',
        // 'location'        => 'required',
        // 'marital_status'  => 'required',
        // 'phone'           => 'required',
        // 'gender'          => 'required',
        // 'is_partner'      => 'required',
        // 'occupation'      => 'required',
        // 'address'         => 'required',
        // 'church_name'     => 'required',
        // 'cfc_center'     => 'required',
        // 'pastor_name'     => 'required',
        // 'spouse'          => 'required',
        // 'children'        => 'required',
        // 'children_no'     => 'required',
        // 'children_ages'   => 'required',
        'attendance_mode'  => 'required',
        // 'arrival_date'    => 'required_if:attendance_mode,Onsite',
        // 'departure_date'  => 'required_if:attendance_mode,Onsite',
        // 'accommodation'   => 'required',
        // 'feeding'         => 'required',
        // 'transportation'  => 'required',
        // 'coming_with_car' => 'required',
        // 'assist_with_car' => 'required',
    ];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'personalized_dp'   => File::class,
    ];
    public $attachMany = [];
}
