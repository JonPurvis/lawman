<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseMultipleAuthenticators;

use Saloon\Http\Auth\CertificateAuthenticator;
use Saloon\Http\Auth\MultiAuthenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

class ToUseMultipleAuthenticators extends Connector
{
    protected function defaultAuth(): MultiAuthenticator
    {
        return new MultiAuthenticator(
            new CertificateAuthenticator(''),
            new TokenAuthenticator(''),
        );
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
