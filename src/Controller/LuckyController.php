<?php

namespace App\Controller;

use App\Service\LuckyNumberService;
use App\Service\LuckyStringService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
class LuckyController
{
    public function __construct(
        private LuckyStringService $luckyStringService
    )
    {
    }

    #[Route('/lucky/number/{name}')]
    public function number(string $name): Response
    {
        return new Response(
            '<html><body>' . $this->luckyStringService->get($name) . '</body></html>'
        );
    }
}
