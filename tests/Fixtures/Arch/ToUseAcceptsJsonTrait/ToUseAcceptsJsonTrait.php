<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseAcceptsJsonTrait;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class ToUseAcceptsJsonTrait extends Connector
{
    use AcceptsJson;

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
