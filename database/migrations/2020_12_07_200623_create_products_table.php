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
            $table->increments('id');
            $table->string('name');
            $table->float('price')->nullable();
            $table->string('prand')->nullable();
            $table->string('image')->nullable();
            $table->float('weight')->nullable();
            $table->float('size')->nullable();
            $table->float('discount')->nullable();
            $table->enum('state',['available','notavailable']);
            $table->string('available_size')->nullable();
            $table->string('available_coler')->nullable();
            $table->string('descrption')->nullable();
            $table->unsignedInteger('quntity')->nullable();
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
}
