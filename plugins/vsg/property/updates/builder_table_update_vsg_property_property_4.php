<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyProperty4 extends Migration
{
    public function up()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->dropColumn('town_id');
        });
    }
    
    public function down()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->integer('town_id')->unsigned();
        });
    }
}
