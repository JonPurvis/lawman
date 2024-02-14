<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUsePagedPagination;

use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\PagedPaginator;

class ToUsePagedPagination extends Connector implements HasPagination
{
    public function paginate(Request $request): PagedPaginator
    {
        return new class(connector: $this, request: $request) extends PagedPaginator
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
