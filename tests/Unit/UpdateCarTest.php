<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdateCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        $car = Car::find(1);
        $car->Year = '2000';
        $car->save();
        $this->assertDatabaseHas('cars', ['Year' => '2000']);
    }
}
