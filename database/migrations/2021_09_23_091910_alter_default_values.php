<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDefaultValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_ens', function (Blueprint $table) {

            $table->string("description", 2080)->nullable()->default(null)->change();

        });
        Schema::table('product_ukrs', function (Blueprint $table) {

            $table->string("description", 2080)->nullable()->default(null)->change();

        });
        Schema::table('product_rus', function (Blueprint $table) {

            $table->string("description", 2080)->nullable()->default(null)->change();

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
