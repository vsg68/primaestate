<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyProperty5 extends Migration
{
    public function up()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->integer('town_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->dropColumn('town_id');
        });
    }
}
