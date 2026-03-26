<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;

expect()->extend(
    'toUseTokenAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Http\Auth\TokenAuthenticator::class)
);

expect()->extend(
    'toUseBasicAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Http\Auth\BasicAuthenticator::class)
);

expect()->extend(
    'toUseCertificateAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Http\Auth\CertificateAuthenticator::class)
);

expect()->extend(
    'toUseHeaderAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Http\Auth\HeaderAuthenticator::class)
);

expect()->extend(
    'toUseQueryAuthentication',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Http\Auth\QueryAuthenticator::class)
);
