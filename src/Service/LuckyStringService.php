<?php

namespace App\Service;

class LuckyStringService
{
    public function __construct(private LuckyNumberService $luckyNumberService)
    {
    }

    /**
     * @throws \Exception
     */
    public function get(string $name): string
    {
        return "Hi " . $name . " - Your lucky number is " . $this->luckyNumberService->get(0, 100);
    }
}