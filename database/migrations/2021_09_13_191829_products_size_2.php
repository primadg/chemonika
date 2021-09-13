<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsSize2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_ens', function (Blueprint $table) {
            $table->string("description", 2000)->change();
        });
        Schema::table('product_rus', function (Blueprint $table) {
            $table->string("description", 2000)->change();
        });
        Schema::table('product_ukrs', function (Blueprint $table) {
            $table->string("description", 2000)->change();
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
