<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;

expect()->extend(
    'toBeSaloonResponse',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toExtend('Saloon\Http\Response')
);
