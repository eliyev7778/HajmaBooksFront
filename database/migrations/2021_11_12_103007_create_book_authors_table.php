<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_authors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img");
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
        Schema::dropIfExists('book_authors');
    }
}
