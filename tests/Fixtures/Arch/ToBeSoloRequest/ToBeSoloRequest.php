<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeSoloRequest;

use Saloon\Enums\Method;
use Saloon\Http\SoloRequest;

class ToBeSoloRequest extends SoloRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return 'https://example.test';
    }
}
