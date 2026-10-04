<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHandlePsrRequest;

use Psr\Http\Message\RequestInterface;
use Saloon\Http\Connector;
use Saloon\Http\PendingRequest;

class ToHandlePsrRequest extends Connector
{
    public function handlePsrRequest(RequestInterface $request, PendingRequest $pendingRequest): RequestInterface
    {
        return $request;
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
