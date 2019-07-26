<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $OriginalCount=Car::count();
        factory(\App\Car::class, 1)->create() ;

        $this->assertEquals($OriginalCount+1,Car::count());
    }
}
