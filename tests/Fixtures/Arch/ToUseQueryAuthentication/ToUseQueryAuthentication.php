<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseQueryAuthentication;

use Saloon\Http\Auth\QueryAuthenticator;
use Saloon\Http\Connector;

class ToUseQueryAuthentication extends Connector
{
    protected function defaultAuth(): QueryAuthenticator
    {
        return new QueryAuthenticator('', '');
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
