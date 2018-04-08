<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyFeatures extends Migration
{
    public function up()
    {
        Schema::table('vsg_property_features', function($table)
        {
            $table->smallInteger('checked')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('vsg_property_features', function($table)
        {
            $table->dropColumn('checked');
        });
    }
}
