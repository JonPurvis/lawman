<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeSaloonConnector;

use Saloon\Http\Connector;

class ToBeSaloonConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return '';
    }
}
