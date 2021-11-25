<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySlugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_slugs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("category_id");
            $table->string("slug_az");
            $table->string("slug_en");
            $table->string("slug_ru");
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
        Schema::dropIfExists('category_slugs');
    }
}
