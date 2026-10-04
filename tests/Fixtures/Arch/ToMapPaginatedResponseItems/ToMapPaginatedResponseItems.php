<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToMapPaginatedResponseItems;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\MapPaginatedResponseItems;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ToMapPaginatedResponseItems extends Request implements MapPaginatedResponseItems, Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '';
    }

    public function mapPaginatedResponseItems(Response $response): array
    {
        return $response->json('items');
    }
}
