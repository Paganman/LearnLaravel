<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->string('productCode')->unique();
            $table->string('productName');
            $table->string('productLine');
            $table->integer('productScale');
            $table->string('productVendor');
            $table->text('productDescription');
            $table->integer('quantityInStock');
            $table->double('buyPrice');
            $table->string('MSRP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */



    public function down()
    {
        Schema::dropIfExists('products');
    }
}
