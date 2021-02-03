<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('model1_names', function (Blueprint $table) {
            $table->string("State",191);
            $table->integer("Phone");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('model1_names', function (Blueprint $table) {
            $table->dropcolumn(['State','Phone']);
            
        });
    }
}
