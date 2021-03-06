<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img_front")->nullable();
            $table->string("img_back")->nullable();
            $table->string("img_audio")->nullable();
            $table->string("title_az");
            $table->string("title_en");
            $table->string("title_ru");
            $table->string("title_tr");
            $table->string("title_uk");
            $table->integer("pages")->nullable();
            $table->integer("year")->nullable();
            $table->integer("see")->default(0);
            $table->integer("sold")->default(0);
            $table->integer("status")->nullable();
            $table->float("price",4)->nullable();
            $table->float("discount",4)->nullable();
            $table->integer("languages_id");
            $table->integer("seller_id");
            $table->integer("user_id");
            $table->integer("like")->default(0);
            $table->integer("free")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
