<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_ens', function (Blueprint $table) {
            $table->string("name",500)->change();
            $table->string("group", 500)->change();
            $table->string("description",500)->change();
            $table->string("field_of_usage",500)->change();
            $table->string("Product_usage",500)->change();
            $table->string("Standart",500)->change();
            $table->string("Package",500)->change();
            $table->string("Storage",500)->change();
        });
        Schema::table('product_ukrs', function (Blueprint $table) {
            $table->string("name",500)->change();
            $table->string("group", 500)->change();
            $table->string("description",500)->change();
            $table->string("field_of_usage",500)->change();
            $table->string("Product_usage",500)->change();
            $table->string("Standart",500)->change();
            $table->string("Package",500)->change();
            $table->string("Storage",500)->change();
        });
        Schema::table('product_rus', function (Blueprint $table) {
            $table->string("name",500)->change();
            $table->string("group", 500)->change();
            $table->string("description",500)->change();
            $table->string("field_of_usage",500)->change();
            $table->string("Product_usage",500)->change();
            $table->string("Standart",500)->change();
            $table->string("Package",500)->change();
            $table->string("Storage",500)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
