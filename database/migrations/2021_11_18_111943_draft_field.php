<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DraftField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_ens', function (Blueprint $table) {

            $table->boolean("draft")->default(false);

        });
        Schema::table('product_ukrs', function (Blueprint $table) {

            $table->boolean("draft")->default(false);

        });
        Schema::table('product_rus', function (Blueprint $table) {

            $table->boolean("draft")->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_ens', function (Blueprint $table) {

            $table->dropColumn("draft");

        });
        Schema::table('product_ukrs', function (Blueprint $table) {

            $table->dropColumn("draft");

        });
        Schema::table('product_rus', function (Blueprint $table) {

            $table->dropColumn("draft");

        });
    }
}
