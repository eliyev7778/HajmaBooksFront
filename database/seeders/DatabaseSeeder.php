<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Hajma Books",
            'email' => "admin@hajmabooks.com",
            'password' => Hash::make("admin123@#"),
            'status'=>2,
            'img'=>asset(\Storage::url("user.png"))
        ]);
        DB::table('discount_times')->insert([
            'updated_at' => Carbon::now()
        ]);
       DB::table('contacts')->insert([
           'tel'=>'1234567890',
           'email'=>'info@hajmabooks.com',
           'address'=>'Azerbaijan',
           'conditions_az'=>'lorem',
           'faq_az'=>'lorem',
           'private_az'=>'lorem',
           'about_az'=>'lorem',
           'conditions_tr'=>'lorem',
           'faq_tr'=>'lorem',
           'private_tr'=>'lorem',
           'about_tr'=>'lorem',
           'conditions_ru'=>'lorem',
           'faq_ru'=>'lorem',
           'private_ru'=>'lorem',
           'about_ru'=>'lorem',
           'conditions_uk'=>'lorem',
           'faq_uk'=>'lorem',
           'private_uk'=>'lorem',
           'about_uk'=>'lorem',
           'conditions_en'=>'lorem',
           'faq_en'=>'lorem',
           'private_en'=>'lorem',
           'about_en'=>'lorem',
       ]);
    }
}
