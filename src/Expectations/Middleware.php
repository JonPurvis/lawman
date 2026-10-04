<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\Contracts\RequestMiddleware;
use Saloon\Contracts\ResponseMiddleware;

expect()->extend(
    'toBeRequestMiddleware',
    fn (): ArchExpectation => $this->toImplement(RequestMiddleware::class)
);

expect()->extend(
    'toBeResponseMiddleware',
    fn (): ArchExpectation => $this->toImplement(ResponseMiddleware::class)
);
