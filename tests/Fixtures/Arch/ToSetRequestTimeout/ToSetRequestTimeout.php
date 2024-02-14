<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToSetRequestTimeout;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\HasTimeout;

class ToSetRequestTimeout extends Connector
{
    use HasTimeout;

    public int $requestTimeout = 120;

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
