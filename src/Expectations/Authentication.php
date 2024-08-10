<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;

expect()->extend(
    'toUseTokenAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Http\Auth\TokenAuthenticator')
);

expect()->extend(
    'toUseBasicAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Http\Auth\BasicAuthenticator')
);

expect()->extend(
    'toUseCertificateAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Http\Auth\CertificateAuthenticator')
);

expect()->extend(
    'toUseHeaderAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Http\Auth\HeaderAuthenticator')
);

expect()->extend(
    'toUseQueryAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Http\Auth\QueryAuthenticator')
);
