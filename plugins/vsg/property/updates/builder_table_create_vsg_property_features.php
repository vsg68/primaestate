<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsgPropertyFeatures extends Migration
{
    public function up()
    {
        Schema::create('vsg_property_features', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 128);
            $table->integer('property_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsg_property_features');
    }
}
