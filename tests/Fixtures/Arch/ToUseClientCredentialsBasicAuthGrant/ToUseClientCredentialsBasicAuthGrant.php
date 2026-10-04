<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseClientCredentialsBasicAuthGrant;

use Saloon\Http\Connector;
use Saloon\Traits\OAuth2\ClientCredentialsBasicAuthGrant;

class ToUseClientCredentialsBasicAuthGrant extends Connector
{
    use ClientCredentialsBasicAuthGrant;

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
