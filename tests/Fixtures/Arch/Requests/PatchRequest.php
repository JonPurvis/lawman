<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class PatchRequest extends Request
{
    /**
     * Define the HTTP method
     */
    protected Method $method = Method::PATCH;

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }
}
