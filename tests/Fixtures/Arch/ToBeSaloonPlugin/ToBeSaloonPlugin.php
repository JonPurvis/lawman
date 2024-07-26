<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeSaloonPlugin;

use Saloon\Http\PendingRequest;

trait ToBeSaloonPlugin
{
    public function bootToBeSaloonPlugin(PendingRequest $pendingRequest): void
    {
        $pendingRequest->headers()->add('Saloon', 'Plugin');
    }
}
