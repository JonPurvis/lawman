<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeSaloonRequest;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ToBeSaloonRequest extends Request
{
    /**
     * Define the HTTP method
     */
    protected Method $method = Method::GET;

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }
}
