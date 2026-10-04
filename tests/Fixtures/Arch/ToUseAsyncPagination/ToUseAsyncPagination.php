<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseAsyncPagination;

use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;
use Saloon\PaginationPlugin\Traits\HasAsyncPagination;

class ToUseAsyncPagination extends Paginator
{
    use HasAsyncPagination;

    protected function applyPagination(Request $request): Request
    {
        return $request;
    }

    protected function isLastPage(Response $response): bool
    {
        return true;
    }

    protected function getPageItems(Response $response, Request $request): array
    {
        return [];
    }

    protected function getTotalPages(Response $response): int
    {
        return 1;
    }
}
