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

        $this->visit('/')
             ->see('Laravel');
    }

    public function testHomePage(){
        echo "test";
        $response=$this->call('GET','login');
        var_dump($response->getContent());

    }
}
