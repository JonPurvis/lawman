<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeRequestMiddleware;

use Saloon\Contracts\RequestMiddleware;
use Saloon\Http\PendingRequest;

class ToBeRequestMiddleware implements RequestMiddleware
{
    public function __invoke(PendingRequest $pendingRequest): void
    {
        $pendingRequest->headers()->add('X-Middleware', 'request');
    }
}
