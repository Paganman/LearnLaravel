<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->integer('employeeNumber')->unique();
            $table->string('lastName');
            $table->string('firstName');
            $table->string('extension');
            $table->string('email');
            $table->string('officeCode');
            $table->string('reportsTo');
            $table->string('jobTitle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
