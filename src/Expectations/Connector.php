<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;

expect()->extend(
    'toBeSaloonConnector',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toExtend('Saloon\Http\Connector')
);

expect()->extend(
    'toHaveDefaultHeaders',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toHaveMethod('defaultHeaders')
);

expect()->extend(
    'toHaveDefaultConfig',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toHaveMethod('defaultConfig')
);

expect()->extend(
    'toHaveBaseUrl',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toHaveMethod('resolveBaseUrl')
);

expect()->extend(
    'toUseCustomResponse',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toHaveMethod('resolveResponseClass')
);

expect()->extend(
    'toHaveCustomFailureDetection',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toHaveMethod('hasRequestFailed')
);

expect()->extend(
    'toHaveCustomException',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toHaveMethod('getRequestException')
);
