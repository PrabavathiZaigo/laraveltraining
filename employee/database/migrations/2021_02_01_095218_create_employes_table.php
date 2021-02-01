<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string("first_name",25);
            $table->string("last_name",25);
            $table->string("gender",20);
            $table->string("city",40);
            $table->integer("age");
            $table->string("state",40);
            $table->string("country",40);
            $table->bigInteger("phone_number");
            $table->integer("pincode");
            $table->integer("date_of_birth");
            $table->string("email",60);
            $table->string("password",40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
