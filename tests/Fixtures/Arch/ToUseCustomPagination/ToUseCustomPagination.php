<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToUseCustomPagination;

use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\Paginator;

class ToUseCustomPagination extends Connector implements HasPagination
{
    public function paginate(Request $request): Paginator
    {
        return new class(connector: $this, request: $request) extends Paginator
        {
            protected function isLastPage(Response $response): bool
            {
                return is_null($response->json('next_page_url'));
            }

            protected function getPageItems(Response $response, Request $request): array
            {
                return $response->json('items');
            }

            protected function applyPagination(Request $request): Request
            {
                $request->headers()->add('X-Page', $this->currentPage);

                $request->headers()->add('X-Per-Page', $this->perPageLimit);

                return $request;
            }
        };
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
