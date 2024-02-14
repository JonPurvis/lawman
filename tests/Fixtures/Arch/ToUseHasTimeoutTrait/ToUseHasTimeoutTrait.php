<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseHasTimeoutTrait;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\HasTimeout;

class ToUseHasTimeoutTrait extends Connector
{
    use HasTimeout;

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
