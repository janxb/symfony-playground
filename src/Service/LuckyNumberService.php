<?php

namespace App\Service;

class LuckyNumberService
{
    /**
     * @throws \Exception
     */
    public function get(int $min, int $max): int
    {
        return random_int($min, $max);
    }
}