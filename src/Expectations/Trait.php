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
    fn (): ArchExpectation => $this->toUse(AcceptsJson::class)
);

expect()->extend(
    'toUseAlwaysThrowOnErrorsTrait',
    fn (): ArchExpectation => $this->toUse(AlwaysThrowOnErrors::class)
);

expect()->extend(
    'toUseTimeoutTrait',
    fn (): ArchExpectation => $this->toUse(HasTimeout::class)
);

expect()->extend(
    'toUseAuthorisationCodeGrantTrait',
    fn (): ArchExpectation => $this->toUse(AuthorizationCodeGrant::class)
);

expect()->extend(
    'toUseClientCredentialsGrantTrait',
    fn (): ArchExpectation => $this->toUse(ClientCredentialsGrant::class)
);
