<?php namespace Vsg\Property\Models;

use Model;

/**
 * Model
 */
class Property extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vsg_property_property';

    public $hasMany = [
        "town"       => "vsg\Property\Models\Town",
        
        // "operation"  => "vsg\Property\Models\Operation",
        // "kindestate" => "vsg\Property\Models\Kindestate",
        // "typeestate" => "vsg\Property\Models\Typeestate",
        // "image"      => "System\Models\File",
    ];
}
