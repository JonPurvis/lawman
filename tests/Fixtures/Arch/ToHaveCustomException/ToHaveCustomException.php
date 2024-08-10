<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveCustomException;

use Saloon\Http\Connector;
use Saloon\Http\Response;
use Throwable;

class ToHaveCustomException extends Connector
{
    public function getRequestException(Response $response, ?Throwable $senderException): ?Throwable
    {
        return new CustomException('Oh yee-naw!', $response, $senderException);
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
