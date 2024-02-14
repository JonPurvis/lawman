<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseAuthorizationCodeGrant;

use Saloon\Http\Connector;
use Saloon\Traits\OAuth2\AuthorizationCodeGrant;

class ToUseAuthorizationCodeGrant extends Connector
{
    use AuthorizationCodeGrant;

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
