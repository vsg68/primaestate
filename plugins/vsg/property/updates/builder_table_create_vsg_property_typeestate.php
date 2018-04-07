<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsgPropertyTypeestate extends Migration
{
    public function up()
    {
        Schema::create('vsg_property_typeestate', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 128);
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsg_property_typeestate');
    }
}
