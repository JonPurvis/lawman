<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToBeSaloonDto;

use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Traits\Responses\HasResponse;

class ToBeSaloonDto implements WithResponse
{
    use HasResponse;

    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}
}
