<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseApiVersionTrait;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\HasApiVersion;

class ToUseApiVersionTrait extends Connector
{
    use HasApiVersion;

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
