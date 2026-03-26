<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\Traits\OAuth2\AuthorizationCodeGrant;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use Saloon\Traits\Plugins\HasTimeout;

expect()->extend(
    'toUseAcceptsJsonTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(AcceptsJson::class)
);

expect()->extend(
    'toUseAlwaysThrowOnErrorsTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(AlwaysThrowOnErrors::class)
);

expect()->extend(
    'toUseTimeoutTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(HasTimeout::class)
);

expect()->extend(
    'toUseAuthorisationCodeGrantTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(AuthorizationCodeGrant::class)
);

expect()->extend(
    'toUseClientCredentialsGrantTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(ClientCredentialsGrant::class)
);
