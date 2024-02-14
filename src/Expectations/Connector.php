<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;

expect()->extend(
    'toBeSaloonConnector',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toExtend('Saloon\Http\Connector')
);
