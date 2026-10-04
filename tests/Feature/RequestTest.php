<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\Requests\ConnectRequest;
use Tests\Fixtures\Arch\Requests\DeleteRequest;
use Tests\Fixtures\Arch\Requests\GetRequest;
use Tests\Fixtures\Arch\Requests\HeadRequest;
use Tests\Fixtures\Arch\Requests\OptionsRequest;
use Tests\Fixtures\Arch\Requests\PatchRequest;
use Tests\Fixtures\Arch\Requests\PostRequest;
use Tests\Fixtures\Arch\Requests\PutRequest;
use Tests\Fixtures\Arch\Requests\TraceRequest;
use Tests\Fixtures\Arch\ToBeSaloonRequest\ToBeSaloonRequest;
use Tests\Fixtures\Arch\ToHaveDefaultBody\ToHaveDefaultBody;
use Tests\Fixtures\Arch\ToHaveFormBody\ToHaveFormBody;
use Tests\Fixtures\Arch\ToHaveJsonBody\ToHaveJsonBody;
use Tests\Fixtures\Arch\ToHaveMultipartBody\ToHaveMultipartBody;
use Tests\Fixtures\Arch\ToHaveStreamBody\ToHaveStreamBody;
use Tests\Fixtures\Arch\ToHaveStringBody\ToHaveStringBody;
use Tests\Fixtures\Arch\ToHaveXmlBody\ToHaveXmlBody;

it('checks that a class is a saloon request', function (): void {
    expect(ToBeSaloonRequest::class)
        ->toBeSaloonRequest();
});

it('checks that a request sends a get request', function (): void {
    expect(GetRequest::class)
        ->toSendGetRequest();
});

it('checks that a request sends a post request', function (): void {
    expect(PostRequest::class)
        ->toSendPostRequest();
});

it('checks that a request sends a head request', function (): void {
    expect(HeadRequest::class)
        ->toSendHeadRequest();
});

it('checks that a request sends a put request', function (): void {
    expect(PutRequest::class)
        ->toSendPutRequest();
});

it('checks that a request sends a patch request', function (): void {
    expect(PatchRequest::class)
        ->toSendPatchRequest();
});

it('checks that a request sends a delete request', function (): void {
    expect(DeleteRequest::class)
        ->toSendDeleteRequest();
});

it('checks that a request sends an options request', function (): void {
    expect(OptionsRequest::class)
        ->toSendOptionsRequest();
});

it('checks that a request sends a connect request', function (): void {
    expect(ConnectRequest::class)
        ->toSendConnectRequest();
});

it('checks that a request sends a trace request', function (): void {
    expect(TraceRequest::class)
        ->toSendTraceRequest();
});

it('checks that a request has a json body', function (): void {
    expect(ToHaveJsonBody::class)
        ->toHaveJsonBody();
});

it('checks that a request has a multipart body', function (): void {
    expect(ToHaveMultipartBody::class)
        ->toHaveMultipartBody();
});

it('checks that a request has a xml body', function (): void {
    expect(ToHaveXmlBody::class)
        ->toHaveXmlBody();
});

it('checks that a request has a form body', function (): void {
    expect(ToHaveFormBody::class)
        ->toHaveFormBody();
});

it('checks that a request has a string body', function (): void {
    expect(ToHaveStringBody::class)
        ->toHaveStringBody();
});

it('checks that a request has a stream body', function (): void {
    expect(ToHaveStreamBody::class)
        ->toHaveStreamBody();
});

it('checks that a request has a default query', function (): void {
    expect('Tests\Fixtures\Arch\ToHaveDefaultQuery\ToHaveDefaultQuery')
        ->toHaveDefaultQuery();
});

it('checks that a request has a default body', function (): void {
    expect(ToHaveDefaultBody::class)
        ->toHaveDefaultBody();
});
