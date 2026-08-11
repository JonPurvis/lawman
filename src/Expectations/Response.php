<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\Http\Response;

expect()->extend(
    'toBeSaloonResponse',
    fn (): ArchExpectation => $this->toExtend(Response::class)
);
