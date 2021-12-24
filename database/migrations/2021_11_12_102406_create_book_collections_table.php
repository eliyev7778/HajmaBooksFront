<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_collections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img_vertical");
            $table->string("img_horizontal");
            $table->string("name_az");
            $table->string("name_ru");
            $table->string("name_en");
            $table->string("name_tr");
            $table->string("name_uk");
            $table->string("slug_az");
            $table->string("slug_ru");
            $table->string("slug_en");
            $table->string("slug_tr");
            $table->string("slug_uk");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_collections');
    }
}
