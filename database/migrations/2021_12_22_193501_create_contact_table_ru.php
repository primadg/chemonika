<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTableRu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_table_ru', function (Blueprint $table) {
            $table->id();
            $table->string("tel1",128)->nullable();
            $table->string("tel2",128)->nullable();
            $table->string("email1",128)->nullable();
            $table->string("email2",128)->nullable();
            $table->string("adrs",280)->nullable();
            $table->string("link_tg",128)->nullable();
            $table->string("link_skype",128)->nullable();
            $table->string("link_facebook",128)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_table_ru');
    }
}
