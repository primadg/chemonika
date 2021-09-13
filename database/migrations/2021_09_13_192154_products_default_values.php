<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsDefaultValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_ens', function (Blueprint $table) {
            $table->string("name", 500)->nullable()->change();
            $table->string("group", 501)->nullable()->change();
            $table->string("field_of_usage", 2080)->nullable()->change();
            $table->string("Product_usage", 2080)->nullable()->change();
            $table->string("Standart", 501)->nullable()->change();
            $table->string("Package", 501)->nullable()->change();
            $table->string("Storage", 501)->nullable()->change();
        });
        Schema::table('product_ukrs', function (Blueprint $table) {
            $table->string("name", 501)->nullable()->change();
            $table->string("group", 501)->nullable()->change();
            $table->string("field_of_usage", 2080)->nullable()->change();
            $table->string("Product_usage", 2080)->nullable()->change();
            $table->string("Standart", 501)->nullable()->change();
            $table->string("Package", 501)->nullable()->change();
            $table->string("Storage", 501)->nullable()->change();
        });
        Schema::table('product_rus', function (Blueprint $table) {
            $table->string("name", 501)->nullable()->change();
            $table->string("group", 501)->nullable()->change();
            $table->string("field_of_usage", 2080)->nullable()->change();
            $table->string("Product_usage", 2080)->nullable()->change();
            $table->string("Standart", 501)->nullable()->change();
            $table->string("Package", 501)->nullable()->change();
            $table->string("Storage", 501)->nullable()->change();
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
