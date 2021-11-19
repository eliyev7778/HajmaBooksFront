<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRlCollectionBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rl_collection_books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("collection_id");
            $table->integer("book_id");
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('collection_id')->references('id')->on('book_collections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rl_collection_books');
    }
}
