<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseAlwaysThrowOnErrorsTrait;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

class ToUseAlwaysThrowOnErrorsTrait extends Connector
{
    use AlwaysThrowOnErrors;

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
