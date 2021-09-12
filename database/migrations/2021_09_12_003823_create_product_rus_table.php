<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_rus', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("group");
            $table->string("description");
            $table->string("field_of_usage");
            $table->string("Product_usage");
            $table->string("Standart");
            $table->string("Package");
            $table->string("Storage");
            $table->string("img");
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
        Schema::dropIfExists('product_rus');
    }
}
