<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveDefaultConfig;

use Saloon\Http\Connector;

class ToHaveDefaultConfig extends Connector
{
    public function resolveBaseUrl(): string
    {
        return '';
    }

    protected function defaultConfig(): array
    {
        return [];
    }
}
