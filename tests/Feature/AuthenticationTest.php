<?php

declare(strict_types=1);

it('checks that a class uses token authentication', function () {
    expect('Tests\Fixtures\Arch\ToUseTokenAuthentication\ToUseTokenAuthentication')
        ->toUseTokenAuthentication();
});

it('checks that a class uses basic authentication', function () {
    expect('Tests\Fixtures\Arch\ToUseBasicAuthentication\ToUseBasicAuthentication')
        ->toUseBasicAuthentication();
});

it('checks that a class uses certificate authentication', function () {
    expect('Tests\Fixtures\Arch\ToUseCertificateAuthentication\ToUseCertificateAuthentication')
        ->toUseCertificateAuthentication();
});

it('checks that a class uses header authentication', function () {
    expect('Tests\Fixtures\Arch\ToUseHeaderAuthentication\ToUseHeaderAuthentication')
        ->toUseHeaderAuthentication();
});

it('checks that a class uses multiple authentication methods', function () {
    expect('Tests\Fixtures\Arch\ToUseMultipleAuthenticators\ToUseMultipleAuthenticators')
        ->toUseCertificateAuthentication()
        ->toUseTokenAuthentication();
});

it('checks that a class uses query authentication', function () {
    expect('Tests\Fixtures\Arch\ToUseQueryAuthentication\ToUseQueryAuthentication')
        ->toUseQueryAuthentication();
});
