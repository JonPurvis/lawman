<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseTokenAuthentication;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

class ToUseTokenAuthentication extends Connector
{
    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator('');
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
