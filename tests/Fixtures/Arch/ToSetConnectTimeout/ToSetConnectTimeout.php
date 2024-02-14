<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToSetConnectTimeout;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\HasTimeout;

class ToSetConnectTimeout extends Connector
{
    use HasTimeout;

    public int $connectTimeout = 60;

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
