<?php

use Illuminate\Database\Seeder;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name'=> "admin",
            'password'=>bcrypt(123456),
            'email'=>'admin@adminzade.com'
        ]);
    }
}
