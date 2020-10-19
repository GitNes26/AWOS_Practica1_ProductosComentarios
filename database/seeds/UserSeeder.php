<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Nestor",
            "email" => "nes@gmail.com",
            "password" => bcrypt("123456")
        ]);

        $User=factory(App\User::class, 5)->create();
    }
}