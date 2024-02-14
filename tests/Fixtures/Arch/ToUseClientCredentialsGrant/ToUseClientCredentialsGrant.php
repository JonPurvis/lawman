<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseClientCredentialsGrant;

use Saloon\Http\Connector;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;

class ToUseClientCredentialsGrant extends Connector
{
    use ClientCredentialsGrant;

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
