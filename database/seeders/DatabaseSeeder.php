<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
    }
}
