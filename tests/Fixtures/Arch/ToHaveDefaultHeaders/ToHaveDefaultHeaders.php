<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveDefaultHeaders;

use Saloon\Http\Connector;

class ToHaveDefaultHeaders extends Connector
{
    public function resolveBaseUrl(): string
    {
        return '';
    }

    public function defaultHeaders(): array
    {
        return [];
    }
}
