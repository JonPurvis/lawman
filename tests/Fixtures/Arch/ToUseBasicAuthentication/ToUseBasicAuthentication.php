<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseBasicAuthentication;

use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Connector;

class ToUseBasicAuthentication extends Connector
{
    protected function defaultAuth(): BasicAuthenticator
    {
        return new BasicAuthenticator('', '');
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
