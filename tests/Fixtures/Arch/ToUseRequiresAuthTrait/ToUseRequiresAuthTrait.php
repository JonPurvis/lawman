<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseRequiresAuthTrait;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Auth\RequiresAuth;

class ToUseRequiresAuthTrait extends Request
{
    use RequiresAuth;

    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '';
    }
}
