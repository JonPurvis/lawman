<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveRetryInterval;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ToHaveRetryInterval extends Request
{
    /**
     * Define the HTTP method
     */
    protected Method $method = Method::GET;

    public ?int $retryInterval = 500;

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }
}
