<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        DB::table('users')->insert([
            'name' => 'sita',
            'email' => 'asp@gmail.com',
            'password' => '123456',
            'role'=>'2',


            ]);
   

    }
}
