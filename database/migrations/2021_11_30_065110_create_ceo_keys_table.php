<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCeoKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceo_keys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('book_id');
            $table->string("title_az")->nullable();
            $table->string("title_en")->nullable();
            $table->string("title_ru")->nullable();
            $table->string("title_tr")->nullable();
            $table->string("title_uk")->nullable();
            $table->text("content_az")->nullable();
            $table->text("content_en")->nullable();
            $table->text("content_ru")->nullable();
            $table->text("content_tr")->nullable();
            $table->text("content_uk")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ceo_keys');
    }
}
