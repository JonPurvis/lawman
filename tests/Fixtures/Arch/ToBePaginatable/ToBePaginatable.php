<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBePaginatable;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ToBePaginatable extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '';
    }
}
