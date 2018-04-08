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

    public $belongsTo = [
        "town"       => "vsg\Property\Models\Town",
        "operation"  => "vsg\Property\Models\Operation",
        "kindestate" => "vsg\Property\Models\Kindestate",
        "typeestate" => "vsg\Property\Models\Typeestate",
    ];
    
    public $belongsToMany = [
        "feature"   =>  [
                        "vsg\Property\Models\Feature",
                        "table" => "vsg_property_feature_property",
                    ],
    ];

    public $attachMany = [
         "image"      => "System\Models\File",
    ];

    public $attachOne = [
        "main_photo"  => "System\Models\File",
    ];
}
