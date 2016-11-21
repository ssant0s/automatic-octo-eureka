<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
{

    $this->visit('/check')
         ->type('admin@gmail.com','email')
         ->type('123456','password')
         ->press('submit')
         ->seeRouteIs('/login');
}

public function loginTest(){

   // dd('checkpoint 2');
}
   


}
