<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsgPropertyImages extends Migration
{
    public function up()
    {
        Schema::create('vsg_property_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 128);
            $table->text('description')->nullable();
            $table->integer('property_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsg_property_images');
    }
}
