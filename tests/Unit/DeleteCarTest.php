<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Car::all()->last();
        $Model = $car->Model;
        $car->delete();

        $this->assertDatabaseMissing('cars', [$Model]);
    }
}
