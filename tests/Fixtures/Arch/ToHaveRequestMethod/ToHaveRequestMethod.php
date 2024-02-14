<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveRequestMethod;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Traits\Plugins\AcceptsJson;

class ToHaveRequestMethod extends Request
{
    use AcceptsJson;
    use HasJsonBody;

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
