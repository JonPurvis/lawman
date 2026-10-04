<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveDefaultOauthConfig;

use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Connector;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;

class ToHaveDefaultOauthConfig extends Connector
{
    use ClientCredentialsGrant;

    protected function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setClientId('id')
            ->setClientSecret('secret');
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
