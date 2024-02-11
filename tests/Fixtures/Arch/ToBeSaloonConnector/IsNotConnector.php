<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeSaloonConnector;

use Saloon\Http\Connector;

class IsNotConnector
{
    public function resolveBaseUrl(): string
    {
        return '';
    }
}
