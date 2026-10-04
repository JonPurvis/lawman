<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeResponseMiddleware;

use Saloon\Contracts\ResponseMiddleware;
use Saloon\Http\Response;

class ToBeResponseMiddleware implements ResponseMiddleware
{
    public function __invoke(Response $response): void
    {
        //
    }
}
