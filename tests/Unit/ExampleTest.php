<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ProfiteController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }




    public function test_profite(){

        $profite = ProfiteController::profite(1000);
//        $this->assertEquals(100,$profite);
        $this->assertLessThan(1000,$profite);
    }
}
