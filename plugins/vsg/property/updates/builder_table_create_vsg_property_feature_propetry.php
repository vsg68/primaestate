<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsgPropertyFeaturePropetry extends Migration
{
    public function up()
    {
        Schema::create('vsg_property_feature_propetry', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('property_id')->unsigned();
            $table->integer('feature_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsg_property_feature_propetry');
    }
}
