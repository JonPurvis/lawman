<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;

expect()->extend(
    'toUseAcceptsJsonTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Traits\Plugins\AcceptsJson::class)
);

expect()->extend(
    'toUseAlwaysThrowOnErrorsTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Traits\Plugins\AlwaysThrowOnErrors::class)
);

expect()->extend(
    'toUseTimeoutTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Traits\Plugins\HasTimeout::class)
);

expect()->extend(
    'toUseAuthorisationCodeGrantTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Traits\OAuth2\AuthorizationCodeGrant::class)
);

expect()->extend(
    'toUseClientCredentialsGrantTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse(\Saloon\Traits\OAuth2\ClientCredentialsGrant::class)
);
