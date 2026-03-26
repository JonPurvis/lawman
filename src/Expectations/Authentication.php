<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Auth\CertificateAuthenticator;
use Saloon\Http\Auth\HeaderAuthenticator;
use Saloon\Http\Auth\QueryAuthenticator;
use Saloon\Http\Auth\TokenAuthenticator;

expect()->extend(
    'toUseTokenAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(TokenAuthenticator::class)
);

expect()->extend(
    'toUseBasicAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(BasicAuthenticator::class)
);

expect()->extend(
    'toUseCertificateAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(CertificateAuthenticator::class)
);

expect()->extend(
    'toUseHeaderAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(HeaderAuthenticator::class)
);

expect()->extend(
    'toUseQueryAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(QueryAuthenticator::class)
);
