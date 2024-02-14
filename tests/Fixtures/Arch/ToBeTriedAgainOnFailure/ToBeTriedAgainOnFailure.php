<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeTriedAgainOnFailure;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ToBeTriedAgainOnFailure extends Request
{
    /**
     * Define the HTTP method
     */
    protected Method $method = Method::GET;

    public ?int $tries = 2;

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }
}
