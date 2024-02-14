<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseCertificateAuthentication;

use Saloon\Http\Auth\CertificateAuthenticator;
use Saloon\Http\Connector;

class ToUseCertificateAuthentication extends Connector
{
    protected function defaultAuth(): CertificateAuthenticator
    {
        return new CertificateAuthenticator('', '');
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
