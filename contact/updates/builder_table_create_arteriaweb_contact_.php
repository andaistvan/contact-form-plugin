<?php namespace Arteriaweb\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebContact extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_contact_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('vezeteknev')->nullable();
            $table->text('keresztnev')->nullable();
            $table->string('telefon')->nullable();
            $table->text('email')->nullable();
            $table->text('indulas');
            $table->text('erkezes');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_contact_');
    }
}
