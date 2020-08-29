<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('price');
            $table->string('photo');
            $table->timestamps();
            $table->double('discount');
            $table->boolean('is_hot_product');
            $table->boolean('is_new_product');
            $table->integer('category_id');
            $table->integer('user_id');
            // detail as string table added directly
            // quantity as integer table added directly
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
