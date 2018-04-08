<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyProperty6 extends Migration
{
    public function up()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->decimal('price', 10, 0);
            $table->integer('size')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->dropColumn('price');
            $table->dropColumn('size');
        });
    }
}
