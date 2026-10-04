<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseNullAuthentication;

use Saloon\Http\Auth\NullAuthenticator;
use Saloon\Http\Connector;

class ToUseNullAuthentication extends Connector
{
    protected function defaultAuth(): NullAuthenticator
    {
        return new NullAuthenticator;
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
