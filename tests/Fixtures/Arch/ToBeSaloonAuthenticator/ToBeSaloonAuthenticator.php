<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeSaloonAuthenticator;

use Saloon\Contracts\Authenticator;
use Saloon\Http\PendingRequest;

class ToBeSaloonAuthenticator implements Authenticator
{
    public function set(PendingRequest $pendingRequest): void
    {
        $pendingRequest->headers()->add('X-API-KEY', 'secret');
    }
}
