<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_categorys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img_vertical");
            $table->string("img_horizontal");
            $table->string("name_az");
            $table->string("name_ru");
            $table->string("name_eng");
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
        Schema::dropIfExists('book_categorys');
    }
}
