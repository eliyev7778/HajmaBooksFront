<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_sellers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img");
            $table->string("name_az");
            $table->string("name_ru");
            $table->string("name_en");
            $table->string("name_tr");
            $table->string("name_uk");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_sellers');
    }
}
