<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasFormBody;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Traits\Body\HasMultipartBody;
use Saloon\Traits\Body\HasStreamBody;
use Saloon\Traits\Body\HasStringBody;
use Saloon\Traits\Body\HasXmlBody;

function getRequestClass(mixed $value): string
{
    if (! is_string($value) || ! class_exists($value)) {
        throw new InvalidArgumentException('Expected a class string.');
    }

    return $value;
}

function getRequestType(string $class): string
{
    $class = new ReflectionClass($class);
    $newInstance = $class->newInstanceWithoutConstructor();
    $methodProperty = $class->getProperty('method');

    return $methodProperty->getValue($newInstance)->name;
}

expect()->extend(
    'toBeSaloonRequest',
    fn (): ArchExpectation => $this->toExtend(Request::class)
);

expect()->extend(
    'toHaveRequestMethod',
    function () {
        expect(property_exists(getRequestClass($this->value), 'method'))->toBeTrue();

        return $this;
    }
);

expect()->extend(
    'toSendGetRequest',
    function () {
        expect(getRequestType(getRequestClass($this->value)))
            ->toEqual(Method::GET->name);

        return $this;
    }
);

expect()->extend(
    'toSendPostRequest',
    function () {
        expect(getRequestType(getRequestClass($this->value)))
            ->toEqual(Method::POST->name);

        return $this;
    }
);

expect()->extend(
    'toSendHeadRequest',
    function () {
        expect(getRequestType(getRequestClass($this->value)))
            ->toEqual(Method::HEAD->name);

        return $this;
    }
);

expect()->extend(
    'toSendPutRequest',
    function () {
        expect(getRequestType(getRequestClass($this->value)))
            ->toEqual(Method::PUT->name);

        return $this;
    }
);

expect()->extend(
    'toSendPatchRequest',
    function () {
        expect(getRequestType(getRequestClass($this->value)))
            ->toEqual(Method::PATCH->name);

        return $this;
    }
);

expect()->extend(
    'toSendDeleteRequest',
    function () {
        expect(getRequestType(getRequestClass($this->value)))
            ->toEqual(Method::DELETE->name);

        return $this;
    }
);

expect()->extend(
    'toSendOptionsRequest',
    function () {
        expect(getRequestType(getRequestClass($this->value)))
            ->toEqual(Method::OPTIONS->name);

        return $this;
    }
);

expect()->extend(
    'toSendConnectRequest',
    function () {
        expect(getRequestType(getRequestClass($this->value)))
            ->toEqual(Method::CONNECT->name);

        return $this;
    }
);

expect()->extend(
    'toSendTraceRequest',
    function () {
        expect(getRequestType(getRequestClass($this->value)))
            ->toEqual(Method::TRACE->name);

        return $this;
    }
);

expect()->extend(
    'toHaveJsonBody',
    fn (): ArchExpectation => $this->toImplement(HasBody::class)
        ->toUse(HasJsonBody::class)
);

expect()->extend(
    'toHaveMultipartBody',
    fn (): ArchExpectation => $this->toImplement(HasBody::class)
        ->toUse(HasMultipartBody::class)
);

expect()->extend(
    'toHaveXmlBody',
    fn (): ArchExpectation => $this->toImplement(HasBody::class)
        ->toUse(HasXmlBody::class)
);

expect()->extend(
    'toHaveFormBody',
    fn (): ArchExpectation => $this->toImplement(HasBody::class)
        ->toUse(HasFormBody::class)
);

expect()->extend(
    'toHaveStringBody',
    fn (): ArchExpectation => $this->toImplement(HasBody::class)
        ->toUse(HasStringBody::class)
);

expect()->extend(
    'toHaveStreamBody',
    fn (): ArchExpectation => $this->toImplement(HasBody::class)
        ->toUse(HasStreamBody::class)
);

expect()->extend(
    'toHaveDefaultQuery',
    fn (): ArchExpectation => $this->toHaveMethod('defaultQuery')
);

expect()->extend(
    'toHaveDefaultBody',
    fn (): ArchExpectation => $this->toHaveMethod('defaultBody')
);
