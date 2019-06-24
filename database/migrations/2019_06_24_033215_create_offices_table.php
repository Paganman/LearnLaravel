<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->string('officeCode')->unique();
            $table->string('city');
            $table->string('phone');
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('state');
            $table->string('country');
            $table->string('postalCode');
            $table->string('territory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
