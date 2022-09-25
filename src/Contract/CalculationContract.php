<?php

namespace App\Contract;

interface CalculationContract
{
    public function fibonacci(int $row): int;
    public function calculate(int $row): int;
    public function average(array $numbers): float;
}