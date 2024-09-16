<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToThrowOnMaxTries;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ToThrowOnMaxTries extends Request
{
    public function __construct(
        public string $test
    ){}

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::GET;

    public ?bool $throwOnMaxTries = true;

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }
}
