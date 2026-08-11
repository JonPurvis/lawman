<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\Http\Connector;

expect()->extend(
    'toBeSaloonConnector',
    fn (): ArchExpectation => $this->toExtend(Connector::class)
);

expect()->extend(
    'toHaveDefaultHeaders',
    fn (): ArchExpectation => $this->toHaveMethod('defaultHeaders')
);

expect()->extend(
    'toHaveDefaultConfig',
    fn (): ArchExpectation => $this->toHaveMethod('defaultConfig')
);

expect()->extend(
    'toHaveBaseUrl',
    fn (): ArchExpectation => $this->toHaveMethod('resolveBaseUrl')
);

expect()->extend(
    'toUseCustomResponse',
    fn (): ArchExpectation => $this->toHaveMethod('resolveResponseClass')
);

expect()->extend(
    'toHaveCustomFailureDetection',
    fn (): ArchExpectation => $this->toHaveMethod('hasRequestFailed')
);

expect()->extend(
    'toHaveCustomException',
    fn (): ArchExpectation => $this->toHaveMethod('getRequestException')
);
