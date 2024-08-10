<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseCustomResponse;

use Saloon\Http\Connector;

class ToUseCustomResponse extends Connector
{
    public function resolveResponseClass(): string
    {
        return '';
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
