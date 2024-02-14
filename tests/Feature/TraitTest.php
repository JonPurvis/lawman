<?php

declare(strict_types=1);

it('checks that a class uses the accepts json trait', function () {
    expect('Tests\Fixtures\Arch\ToUseAcceptsJsonTrait\ToUseAcceptsJsonTrait')
        ->toUseAcceptsJsonTrait();
});

it('checks that a class uses the always throw on errors trait', function () {
    expect('Tests\Fixtures\Arch\ToUseAlwaysThrowOnErrorsTrait\ToUseAlwaysThrowOnErrorsTrait')
        ->toUseAlwaysThrowOnErrorsTrait();
});

it('checks that a class uses has timeout trait', function () {
    expect('Tests\Fixtures\Arch\ToUseHasTimeoutTrait\ToUseHasTimeoutTrait')
        ->toUseTimeoutTrait();
});

it('checks that a class uses the authorization code grant trait', function () {
    expect('Tests\Fixtures\Arch\ToUseAuthorizationCodeGrant\ToUseAuthorizationCodeGrant')
        ->toUseAuthorisationCodeGrantTrait();
});

it('checks that a class uses the client credentials grant trait', function () {
    expect('Tests\Fixtures\Arch\ToUseClientCredentialsGrant\ToUseClientCredentialsGrant')
        ->toUseClientCredentialsGrantTrait();
});
