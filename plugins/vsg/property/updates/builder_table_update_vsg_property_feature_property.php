<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyFeatureProperty extends Migration
{
    public function up()
    {
        Schema::rename('vsg_property_feature_propetry', 'vsg_property_feature_property');
    }
    
    public function down()
    {
        Schema::rename('vsg_property_feature_property', 'vsg_property_feature_propetry');
    }
}
