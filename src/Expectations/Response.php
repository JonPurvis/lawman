<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\Contracts\DataObjects\WithResponse;
use Saloon\Http\Response;
use Saloon\Traits\Responses\HasResponse;

expect()->extend(
    'toBeSaloonResponse',
    fn (): ArchExpectation => $this->toExtend(Response::class)
);

expect()->extend(
    'toBeSaloonDto',
    fn (): ArchExpectation => $this->toImplement(WithResponse::class)
        ->toUse(HasResponse::class)
);
