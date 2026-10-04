<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToCreateDtoFromResponse;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

class ToCreateDtoFromResponse extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '';
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        return $response->json();
    }
}
