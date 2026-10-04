<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\Contracts\Authenticator;
use Saloon\Contracts\OAuthAuthenticator;
use Saloon\Http\Auth\AccessTokenAuthenticator;
use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Auth\CertificateAuthenticator;
use Saloon\Http\Auth\DigestAuthenticator;
use Saloon\Http\Auth\HeaderAuthenticator;
use Saloon\Http\Auth\MultiAuthenticator;
use Saloon\Http\Auth\NullAuthenticator;
use Saloon\Http\Auth\QueryAuthenticator;
use Saloon\Http\Auth\TokenAuthenticator;

expect()->extend(
    'toUseTokenAuthentication',
    fn (): ArchExpectation => $this->toUse(TokenAuthenticator::class)
);

expect()->extend(
    'toUseBasicAuthentication',
    fn (): ArchExpectation => $this->toUse(BasicAuthenticator::class)
);

expect()->extend(
    'toUseCertificateAuthentication',
    fn (): ArchExpectation => $this->toUse(CertificateAuthenticator::class)
);

expect()->extend(
    'toUseHeaderAuthentication',
    fn (): ArchExpectation => $this->toUse(HeaderAuthenticator::class)
);

expect()->extend(
    'toUseQueryAuthentication',
    fn (): ArchExpectation => $this->toUse(QueryAuthenticator::class)
);

expect()->extend(
    'toUseDigestAuthentication',
    fn (): ArchExpectation => $this->toUse(DigestAuthenticator::class)
);

expect()->extend(
    'toUseMultipleAuthenticators',
    fn (): ArchExpectation => $this->toUse(MultiAuthenticator::class)
);

expect()->extend(
    'toUseAccessTokenAuthentication',
    fn (): ArchExpectation => $this->toUse(AccessTokenAuthenticator::class)
);

expect()->extend(
    'toUseNullAuthentication',
    fn (): ArchExpectation => $this->toUse(NullAuthenticator::class)
);

expect()->extend(
    'toBeSaloonAuthenticator',
    fn (): ArchExpectation => $this->toImplement(Authenticator::class)
);

expect()->extend(
    'toBeOAuthAuthenticator',
    fn (): ArchExpectation => $this->toImplement(OAuthAuthenticator::class)
);
