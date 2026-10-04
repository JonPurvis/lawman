<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseAccessTokenAuthentication;

use Saloon\Http\Auth\AccessTokenAuthenticator;
use Saloon\Http\Connector;

class ToUseAccessTokenAuthentication extends Connector
{
    protected function defaultAuth(): AccessTokenAuthenticator
    {
        return new AccessTokenAuthenticator('token');
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
