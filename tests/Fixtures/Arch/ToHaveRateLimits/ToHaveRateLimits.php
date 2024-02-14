<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveRateLimits;

use Redis;
use Saloon\Http\Connector;
use Saloon\RateLimitPlugin\Contracts\RateLimitStore;
use Saloon\RateLimitPlugin\Limit;
use Saloon\RateLimitPlugin\Stores\RedisStore;
use Saloon\RateLimitPlugin\Traits\HasRateLimits;

class ToHaveRateLimits extends Connector
{
    use HasRateLimits;

    public function resolveBaseUrl(): string
    {
        return '';
    }

    protected function resolveLimits(): array
    {
        return [
            Limit::allow(100)->everyMinute(),
            Limit::allow(1000)->everyDay(),
            Limit::allow(5000)->everyMonth(),
        ];
    }

    protected function resolveRateLimitStore(): RateLimitStore
    {
        $redis = new Redis;
        $redis->connect('127.0.0.1');

        return new RedisStore($redis);
    }
}
