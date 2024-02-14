<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseCursorPagination;

use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\CursorPaginator;

class ToUseCursorPagination extends Connector implements HasPagination
{
    public function paginate(Request $request): CursorPaginator
    {
        return new class(connector: $this, request: $request) extends CursorPaginator
        {
            protected function getNextCursor(Response $response): int|string
            {
                return $response->json('next_cursor');
            }

            protected function isLastPage(Response $response): bool
            {
                return is_null($response->json('next_cursor'));
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
