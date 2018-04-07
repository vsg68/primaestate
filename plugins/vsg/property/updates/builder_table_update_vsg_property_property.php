<?php namespace Vsg\Property\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVsgPropertyProperty extends Migration
{
    public function up()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->string('name', 128);
            $table->text('description')->nullable();
            $table->text('details')->nullable();
            $table->integer('towns_id')->unsigned();
            $table->smallInteger('bedrooms')->nullable()->unsigned()->default(1);
            $table->smallInteger('bathrooms')->nullable()->unsigned()->default(1);
            $table->smallInteger('carplace')->nullable()->unsigned()->default(1);
            $table->integer('features_id')->unsigned();
            $table->integer('images_id')->unsigned();
            $table->integer('operations_id')->unsigned();
            $table->integer('kindestate_id')->unsigned();
            $table->integer('typeestate_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('vsg_property_property', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('details');
            $table->dropColumn('towns_id');
            $table->dropColumn('bedrooms');
            $table->dropColumn('bathrooms');
            $table->dropColumn('carplace');
            $table->dropColumn('features_id');
            $table->dropColumn('images_id');
            $table->dropColumn('operations_id');
            $table->dropColumn('kindestate_id');
            $table->dropColumn('typeestate_id');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
