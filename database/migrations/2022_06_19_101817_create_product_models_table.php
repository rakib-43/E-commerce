<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id');
            $table->string('name');
            $table->float('mrp');
            $table->float('price');
            $table->integer('qnt');
            $table->text('image')->nullable();
            $table->text('short_desc');
            $table->text('meta_title');
            $table->text('meta_desc');
            $table->text('meta_keyword');
            $table->text('status')->default(1);
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
        Schema::dropIfExists('product_models');
    }
}
