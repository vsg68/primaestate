<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyFeature2 extends Migration
{
    public function up()
    {
        Schema::table('vsg_property_feature', function($table)
        {
            $table->dropColumn('property_id');
            $table->dropColumn('checked');
        });
    }
    
    public function down()
    {
        Schema::table('vsg_property_feature', function($table)
        {
            $table->integer('property_id')->unsigned();
            $table->smallInteger('checked')->unsigned();
        });
    }
}
