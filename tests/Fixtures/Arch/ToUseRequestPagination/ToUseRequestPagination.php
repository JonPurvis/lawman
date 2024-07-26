<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseRequestPagination;

use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use Saloon\PaginationPlugin\PagedPaginator;
use Saloon\PaginationPlugin\Paginator;

class ToUseRequestPagination extends Connector implements HasRequestPagination
{
    public function paginate(Connector $connector): Paginator
    {
        return new class(connector: $connector, request: $this) extends PagedPaginator
        {
            protected function isLastPage(Response $response): bool
            {
                return is_null($response->json('next_page_url'));
            }

            protected function getPageItems(Response $response, Request $request): array
            {
                return $response->json('items');
            }
        };
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
