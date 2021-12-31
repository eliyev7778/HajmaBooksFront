<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->string('tel');
            $table->string('address');
            $table->string('conditions_az');
            $table->string('faq_az');
            $table->string('private_az');
            $table->string('about_az');
            $table->string('conditions_en');
            $table->string('faq_en');
            $table->string('private_en');
            $table->string('about_en');
            $table->string('conditions_tr');
            $table->string('faq_tr');
            $table->string('private_tr');
            $table->string('about_tr');
            $table->string('conditions_ru');
            $table->string('faq_ru');
            $table->string('private_ru');
            $table->string('about_ru');
            $table->string('conditions_uk');
            $table->string('faq_uk');
            $table->string('private_uk');
            $table->string('about_uk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
