<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertPoroductTablesNewField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_ens', function (Blueprint $table) {
            $table->boolean("visible")->default(true);
        });
        Schema::table('product_ukrs', function (Blueprint $table) {
            $table->boolean("visible")->default(true);
        });
        Schema::table('product_rus', function (Blueprint $table) {
            $table->boolean("visible")->default(true);
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
