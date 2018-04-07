<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsgPropertyProperty extends Migration
{
    public function up()
    {
        Schema::create('vsg_property_property', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsg_property_property');
    }
}
