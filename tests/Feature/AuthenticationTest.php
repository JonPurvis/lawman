<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToBeOAuthAuthenticator\ToBeOAuthAuthenticator;
use Tests\Fixtures\Arch\ToBeSaloonAuthenticator\ToBeSaloonAuthenticator;
use Tests\Fixtures\Arch\ToUseAccessTokenAuthentication\ToUseAccessTokenAuthentication;
use Tests\Fixtures\Arch\ToUseBasicAuthentication\ToUseBasicAuthentication;
use Tests\Fixtures\Arch\ToUseCertificateAuthentication\ToUseCertificateAuthentication;
use Tests\Fixtures\Arch\ToUseDigestAuthentication\ToUseDigestAuthentication;
use Tests\Fixtures\Arch\ToUseHeaderAuthentication\ToUseHeaderAuthentication;
use Tests\Fixtures\Arch\ToUseMultipleAuthenticators\ToUseMultipleAuthenticators;
use Tests\Fixtures\Arch\ToUseNullAuthentication\ToUseNullAuthentication;
use Tests\Fixtures\Arch\ToUseQueryAuthentication\ToUseQueryAuthentication;
use Tests\Fixtures\Arch\ToUseTokenAuthentication\ToUseTokenAuthentication;

it('checks that a class uses token authentication', function (): void {
    expect(ToUseTokenAuthentication::class)
        ->toUseTokenAuthentication();
});

it('checks that a class uses basic authentication', function (): void {
    expect(ToUseBasicAuthentication::class)
        ->toUseBasicAuthentication();
});

it('checks that a class uses certificate authentication', function (): void {
    expect(ToUseCertificateAuthentication::class)
        ->toUseCertificateAuthentication();
});

it('checks that a class uses header authentication', function (): void {
    expect(ToUseHeaderAuthentication::class)
        ->toUseHeaderAuthentication();
});

it('checks that a class uses multiple authentication methods', function (): void {
    expect(ToUseMultipleAuthenticators::class)
        ->toUseMultipleAuthenticators()
        ->toUseCertificateAuthentication()
        ->toUseTokenAuthentication();
});

it('checks that a class uses digest authentication', function (): void {
    expect(ToUseDigestAuthentication::class)
        ->toUseDigestAuthentication();
});

it('checks that a class uses query authentication', function (): void {
    expect(ToUseQueryAuthentication::class)
        ->toUseQueryAuthentication();
});

it('checks that a class uses access token authentication', function (): void {
    expect(ToUseAccessTokenAuthentication::class)
        ->toUseAccessTokenAuthentication();
});

it('checks that a class uses null authentication', function (): void {
    expect(ToUseNullAuthentication::class)
        ->toUseNullAuthentication();
});

it('checks that a class is a saloon authenticator', function (): void {
    expect(ToBeSaloonAuthenticator::class)
        ->toBeSaloonAuthenticator();
});

it('checks that a class is an oauth authenticator', function (): void {
    expect(ToBeOAuthAuthenticator::class)
        ->toBeOAuthAuthenticator();
});
