<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveDefaultBody;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasStringBody;

class ToHaveDefaultBody extends Request implements HasBody
{
    use HasStringBody;

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::POST;

    protected function defaultBody(): string
    {
        return '';
    }

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }
}
