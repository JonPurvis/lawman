<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveCaching;

use Saloon\CachePlugin\Contracts\Cacheable;
use Saloon\CachePlugin\Drivers\PsrCacheDriver;
use Saloon\CachePlugin\Traits\HasCaching;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class ToHaveCaching extends Request implements Cacheable
{
    use HasCaching;

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::GET;

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }

    public function resolveCacheDriver(): PsrCacheDriver
    {
        // This example uses the PhpArrayAdapter from
        // the symfony/cache library.

        return new PsrCacheDriver(new PhpArrayAdapter);
    }

    public function cacheExpiryInSeconds(): int
    {
        return 3600;
    }
}
