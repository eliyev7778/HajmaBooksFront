<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookAudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_audios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("book_id");
            $table->string("file");
            $table->string("title");
            $table->integer("file_row");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_audios');
    }
}
