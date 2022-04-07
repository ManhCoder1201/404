<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('productID');
        $table->string('productName');
        $table->integer('productDescription');
        $table->float('productPrice');
        $table->integer('category_id')->unsigned();
        $table ->foreign('supplierID')->references('supplierID')->on('supplierID');
        $table->integer('categoryID')->unsigned();
        $table ->foreign('categoryID')->references('categoryID')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
