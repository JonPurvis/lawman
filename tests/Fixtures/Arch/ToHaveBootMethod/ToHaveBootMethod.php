<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveBootMethod;

use Saloon\Http\Connector;
use Saloon\Http\PendingRequest;

class ToHaveBootMethod extends Connector
{
    public function boot(PendingRequest $pendingRequest): void
    {
        $pendingRequest->headers()->add('X-Booted', 'true');
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
