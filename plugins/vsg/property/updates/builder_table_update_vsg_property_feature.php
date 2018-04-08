<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyFeature extends Migration
{
    public function up()
    {
        Schema::rename('vsg_property_features', 'vsg_property_feature');
    }
    
    public function down()
    {
        Schema::rename('vsg_property_feature', 'vsg_property_features');
    }
}
