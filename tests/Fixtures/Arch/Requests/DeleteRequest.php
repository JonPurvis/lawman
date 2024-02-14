<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteRequest extends Request
{
    /**
     * Define the HTTP method
     */
    protected Method $method = Method::DELETE;

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }
}
