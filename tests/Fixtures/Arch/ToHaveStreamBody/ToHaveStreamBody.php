<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveStreamBody;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasStreamBody;

class ToHaveStreamBody extends Request implements HasBody
{
    use HasStreamBody;

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
