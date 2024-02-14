<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class PostRequest extends Request
{
    /**
     * Define the HTTP method
     */
    protected Method $method = Method::POST;

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }
}
