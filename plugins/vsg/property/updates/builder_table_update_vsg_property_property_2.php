<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyProperty2 extends Migration
{
    public function up()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->integer('feature_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->integer('operation_id')->unsigned();
            $table->dropColumn('features_id');
            $table->dropColumn('images_id');
            $table->dropColumn('operations_id');
        });
    }
    
    public function down()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->dropColumn('feature_id');
            $table->dropColumn('image_id');
            $table->dropColumn('operation_id');
            $table->integer('features_id')->unsigned();
            $table->integer('images_id')->unsigned();
            $table->integer('operations_id')->unsigned();
        });
    }
}
