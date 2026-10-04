<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseDigestAuthentication;

use Saloon\Http\Auth\DigestAuthenticator;
use Saloon\Http\Connector;

class ToUseDigestAuthentication extends Connector
{
    protected function defaultAuth(): DigestAuthenticator
    {
        return new DigestAuthenticator('', '', '');
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
