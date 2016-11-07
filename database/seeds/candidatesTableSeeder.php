<?php

use Illuminate\Database\Seeder;

class candidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*DB::table('candidates')->insert([
            'first_name' => str_random(10),
            'middle_name'=>str_random(10),
            'last_name'=>str_random(10),
            'phone_no'=>str_random(10),
            'email_id' => str_random(11),
            'address' => str_random(11),
            'gender'=>str_random(255),
            'photo'=>str_random(255),
            'resume'=>str_random(255)


            ]);    }

            */

factory(App\candidates::class, 50)->create()->each(function($u) {
        $u->posts()->save(factory(App\Post::class)->make());
    });


}
