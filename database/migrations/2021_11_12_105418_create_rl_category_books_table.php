<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRlCategoryBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rl_category_books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("category_id");
            $table->integer("book_id");
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('category_id')->references('id')->on('book_categorys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rl_category_books');
    }
}
