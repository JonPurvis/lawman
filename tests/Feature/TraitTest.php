<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToUseAcceptsJsonTrait\ToUseAcceptsJsonTrait;
use Tests\Fixtures\Arch\ToUseAlwaysThrowOnErrorsTrait\ToUseAlwaysThrowOnErrorsTrait;
use Tests\Fixtures\Arch\ToUseApiVersionTrait\ToUseApiVersionTrait;
use Tests\Fixtures\Arch\ToUseAuthorizationCodeGrant\ToUseAuthorizationCodeGrant;
use Tests\Fixtures\Arch\ToUseClientCredentialsBasicAuthGrant\ToUseClientCredentialsBasicAuthGrant;
use Tests\Fixtures\Arch\ToUseClientCredentialsGrant\ToUseClientCredentialsGrant;
use Tests\Fixtures\Arch\ToUseHasTimeoutTrait\ToUseHasTimeoutTrait;
use Tests\Fixtures\Arch\ToUseRequiresAuthTrait\ToUseRequiresAuthTrait;

it('checks that a class uses the accepts json trait', function (): void {
    expect(ToUseAcceptsJsonTrait::class)
        ->toUseAcceptsJsonTrait();
});

it('checks that a class uses the always throw on errors trait', function (): void {
    expect(ToUseAlwaysThrowOnErrorsTrait::class)
        ->toUseAlwaysThrowOnErrorsTrait();
});

it('checks that a class uses has timeout trait', function (): void {
    expect(ToUseHasTimeoutTrait::class)
        ->toUseTimeoutTrait();
});

it('checks that a class uses the authorization code grant trait', function (): void {
    expect(ToUseAuthorizationCodeGrant::class)
        ->toUseAuthorisationCodeGrantTrait();
});

it('checks that a class uses the client credentials grant trait', function (): void {
    expect(ToUseClientCredentialsGrant::class)
        ->toUseClientCredentialsGrantTrait();
});

it('checks that a class uses the client credentials basic auth grant trait', function (): void {
    expect(ToUseClientCredentialsBasicAuthGrant::class)
        ->toUseClientCredentialsBasicAuthGrantTrait();
});

it('checks that a class uses the requires auth trait', function (): void {
    expect(ToUseRequiresAuthTrait::class)
        ->toUseRequiresAuthTrait();
});

it('checks that a class uses the api version trait', function (): void {
    expect(ToUseApiVersionTrait::class)
        ->toUseApiVersionTrait();
});
