<?php

namespace Tests;

use App\Services\CalculationService;
use PHPUnit\Framework\TestCase;

final class CalculationTest extends TestCase
{
    public function testFibonacci()
    {
        $row = 6;
        $calculation = new CalculationService();
        $response = $calculation->fibonacci($row);
        
        $this->assertEquals(8, $response);
    }

    public function testCalculationFibonacciRow1()
    {
        // 0 + 1 = 1
        $row = 1;
        $calculation = new CalculationService();
        $response = $calculation->calculate($row);
        
        $this->assertEquals(1, $response);
    }

    public function testCalculationFibonacciRow2()
    {
        // 0 + 1 + 1 = 2
        $row = 2;
        $calculation = new CalculationService();
        $response = $calculation->calculate($row);
        
        $this->assertEquals(2, $response);
    }

    public function testCalculationFibonacciRow3()
    {
        // 0 + 1 + 1 + 2 = 4
        $row = 3;
        $calculation = new CalculationService();
        $response = $calculation->calculate($row);
        
        $this->assertEquals(4, $response);
    }

    public function testCalculationFibonacciRow4()
    {
        // 0 + 1 + 1 + 2 + 3 = 7
        $row = 4;
        $calculation = new CalculationService();
        $response = $calculation->calculate($row);
        
        $this->assertEquals(7, $response);
    }

    public function testCalculationFibonacciRow5()
    {
        // 0 + 1 + 1 + 2 + 3 + 5 = 12
        $row = 5;
        $calculation = new CalculationService();
        $response = $calculation->calculate($row);
        
        $this->assertEquals(12, $response);
    }

    public function testCalculateAverage()
    {
        $numbers = [2, 4];
        $calculation = new CalculationService();
        $response = $calculation->average($numbers);

        $this->assertEquals(4.5, $response);
    }

    public function testCalculateAverageWithInvalidData()
    {
        $numbers = ['a', null];
        $calculation = new CalculationService();
        $response = $calculation->average($numbers);

        $this->assertEquals(-1, $response);
    }
}