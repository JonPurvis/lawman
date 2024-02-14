<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseHeaderAuthentication;

use Saloon\Http\Auth\HeaderAuthenticator;
use Saloon\Http\Connector;

class ToUseHeaderAuthentication extends Connector
{
    protected function defaultAuth(): HeaderAuthenticator
    {
        return new HeaderAuthenticator('', '');
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
