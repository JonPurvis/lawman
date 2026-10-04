<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveCustomRetryHandling;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Request;

class ToHaveCustomRetryHandling extends Connector
{
    public function handleRetry(FatalRequestException|RequestException $exception, Request $request): bool
    {
        return true;
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
