<?php

declare(strict_types=1);

it('checks that a class is a saloon request', function () {
    expect('Tests\Fixtures\Arch\ToBeSaloonRequest\ToBeSaloonRequest')
        ->toBeSaloonRequest();
});

it('checks that a request sends a get request', function () {
    expect('Tests\Fixtures\Arch\Requests\GetRequest')
        ->toSendGetRequest();
});

it('checks that a request sends a post request', function () {
    expect('Tests\Fixtures\Arch\Requests\PostRequest')
        ->toSendPostRequest();
});

it('checks that a request sends a head request', function () {
    expect('Tests\Fixtures\Arch\Requests\HeadRequest')
        ->toSendHeadRequest();
});

it('checks that a request sends a put request', function () {
    expect('Tests\Fixtures\Arch\Requests\PutRequest')
        ->toSendPutRequest();
});

it('checks that a request sends a patch request', function () {
    expect('Tests\Fixtures\Arch\Requests\PatchRequest')
        ->toSendPatchRequest();
});

it('checks that a request sends a delete request', function () {
    expect('Tests\Fixtures\Arch\Requests\DeleteRequest')
        ->toSendDeleteRequest();
});

it('checks that a request sends an options request', function () {
    expect('Tests\Fixtures\Arch\Requests\OptionsRequest')
        ->toSendOptionsRequest();
});

it('checks that a request sends a connect request', function () {
    expect('Tests\Fixtures\Arch\Requests\ConnectRequest')
        ->toSendConnectRequest();
});

it('checks that a request sends a trace request', function () {
    expect('Tests\Fixtures\Arch\Requests\TraceRequest')
        ->toSendTraceRequest();
});

it('checks that a request has a json body', function () {
    expect('Tests\Fixtures\Arch\ToHaveJsonBody\ToHaveJsonBody')
        ->toHaveJsonBody();
});

it('checks that a request has a multipart body', function () {
    expect('Tests\Fixtures\Arch\ToHaveMultipartBody\ToHaveMultipartBody')
        ->toHaveMultipartBody();
});

it('checks that a request has a xml body', function () {
    expect('Tests\Fixtures\Arch\ToHaveXmlBody\ToHaveXmlBody')
        ->toHaveXmlBody();
});

it('checks that a request has a form body', function () {
    expect('Tests\Fixtures\Arch\ToHaveFormBody\ToHaveFormBody')
        ->toHaveFormBody();
});

it('checks that a request has a string body', function () {
    expect('Tests\Fixtures\Arch\ToHaveStringBody\ToHaveStringBody')
        ->toHaveStringBody();
});

it('checks that a request has a stream body', function () {
    expect('Tests\Fixtures\Arch\ToHaveStreamBody\ToHaveStreamBody')
        ->toHaveStreamBody();
});
