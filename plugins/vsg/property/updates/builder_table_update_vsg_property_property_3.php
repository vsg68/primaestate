<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyProperty3 extends Migration
{
    public function up()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->integer('kindestate_id')->nullable()->change();
            $table->integer('typeestate_id')->nullable()->change();
            $table->integer('feature_id')->nullable()->change();
            $table->integer('image_id')->nullable()->change();
            $table->integer('operation_id')->nullable()->change();
            $table->renameColumn('towns_id', 'town_id');
        });
    }
    
    public function down()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->integer('kindestate_id')->nullable(false)->change();
            $table->integer('typeestate_id')->nullable(false)->change();
            $table->integer('feature_id')->nullable(false)->change();
            $table->integer('image_id')->nullable(false)->change();
            $table->integer('operation_id')->nullable(false)->change();
            $table->renameColumn('town_id', 'towns_id');
        });
    }
}
