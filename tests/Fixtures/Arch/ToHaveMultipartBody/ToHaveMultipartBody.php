<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveMultipartBody;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasMultipartBody;

class ToHaveMultipartBody extends Request implements HasBody
{
    use HasMultipartBody;

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
