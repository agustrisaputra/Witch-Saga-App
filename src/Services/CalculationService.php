<?php

namespace App\Services;

use App\Contract\CalculationContract;

class CalculationService implements CalculationContract
{
    /**
     * Fibonacci numbers recursive
     * 
     * F0 = 0, F1 = 1
     * Fn = Fn-1 + Fn-2
     * 
     */
    public function fibonacci(int $row): int
    {
        if ($row == 0) {
            return 0;
        } else if ($row == 1) {
            return 1;
        } else {
            return $this->fibonacci($row - 1) + $this->fibonacci($row - 2);
        }
    }

    public function calculate(int $row): int
    {
        $result = 0;

        for ($i = 0; $i <= $row; $i++) {
            $number = $this->fibonacci($i);
            $result += $number;
        }

        return $result;
    }

    public function average(array $numbers): float
    {
        $lists = [];

        foreach ($numbers as $number) {
            if (is_null($number) || $number < 0 || gettype($number) != 'integer') {
                return -1;
                break;
            } else {
                $row = $this->calculate($number);
                array_push($lists, $row);
            }
        }

        return array_sum($lists)/count($lists);
    }
}