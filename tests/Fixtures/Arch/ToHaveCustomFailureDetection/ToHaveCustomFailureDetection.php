<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveCustomFailureDetection;

use Saloon\Http\Connector;
use Saloon\Http\Response;

class ToHaveCustomFailureDetection extends Connector
{
    public function hasRequestFailed(Response $response): bool
    {
        return true;

    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
