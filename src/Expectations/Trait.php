<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;

expect()->extend(
    'toUseAcceptsJsonTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Traits\Plugins\AcceptsJson')
);

expect()->extend(
    'toUseAlwaysThrowOnErrorsTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Traits\Plugins\AlwaysThrowOnErrors')
);

expect()->extend(
    'toUseTimeoutTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Traits\Plugins\HasTimeout')
);

expect()->extend(
    'toUseAuthorisationCodeGrantTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Traits\OAuth2\AuthorizationCodeGrant')
);

expect()->extend(
    'toUseClientCredentialsGrantTrait',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toUse('Saloon\Traits\OAuth2\ClientCredentialsGrant')
);
