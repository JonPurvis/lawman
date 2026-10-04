<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveDefaultDelay;

use Saloon\Http\Connector;

class ToHaveDefaultDelay extends Connector
{
    protected function defaultDelay(): ?int
    {
        return 500;
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
