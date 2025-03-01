<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;
use Pest\Expectation;
use Saloon\Enums\Method;

function getRequestType(string $class): string
{
    $class = new ReflectionClass($class);
    $newInstance = $class->newInstanceWithoutConstructor();
    $methodProperty = $class->getProperty('method');

    return $methodProperty->getValue($newInstance)->name;
}

expect()->extend(
    'toBeSaloonRequest',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toExtend('Saloon\Http\Request')
);

expect()->extend(
    'toHaveRequestMethod',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(property_exists($this->value, 'method'))->toBeTrue()
);

expect()->extend(
    'toSendGetRequest',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(getRequestType($this->value))
        ->toEqual(Method::GET->name)
);

expect()->extend(
    'toSendPostRequest',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(getRequestType($this->value))
        ->toEqual(Method::POST->name)
);

expect()->extend(
    'toSendHeadRequest',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(getRequestType($this->value))
        ->toEqual(Method::HEAD->name)
);

expect()->extend(
    'toSendPutRequest',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(getRequestType($this->value))
        ->toEqual(Method::PUT->name)
);

expect()->extend(
    'toSendPatchRequest',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(getRequestType($this->value))
        ->toEqual(Method::PATCH->name)
);

expect()->extend(
    'toSendDeleteRequest',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(getRequestType($this->value))
        ->toEqual(Method::DELETE->name)
);

expect()->extend(
    'toSendOptionsRequest',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(getRequestType($this->value))
        ->toEqual(Method::OPTIONS->name)
);

expect()->extend(
    'toSendConnectRequest',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(getRequestType($this->value))
        ->toEqual(Method::CONNECT->name)
);

expect()->extend(
    'toSendTraceRequest',
    fn (): Expectation => // @phpstan-ignore-next-line
    expect(getRequestType($this->value))
        ->toEqual(Method::TRACE->name)
);

expect()->extend(
    'toHaveJsonBody',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\Contracts\Body\HasBody')
        ->toUse('Saloon\Traits\Body\HasJsonBody')
);

expect()->extend(
    'toHaveMultipartBody',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\Contracts\Body\HasBody')
        ->toUse('Saloon\Traits\Body\HasMultipartBody')
);

expect()->extend(
    'toHaveXmlBody',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\Contracts\Body\HasBody')
        ->toUse('Saloon\Traits\Body\HasXmlBody')
);

expect()->extend(
    'toHaveFormBody',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\Contracts\Body\HasBody')
        ->toUse('Saloon\Traits\Body\HasFormBody')
);

expect()->extend(
    'toHaveStringBody',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\Contracts\Body\HasBody')
        ->toUse('Saloon\Traits\Body\HasStringBody')
);

expect()->extend(
    'toHaveStreamBody',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\Contracts\Body\HasBody')
        ->toUse('Saloon\Traits\Body\HasStreamBody')
);

expect()->extend(
    'toHaveDefaultQuery',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toHaveMethod('defaultQuery')
);

expect()->extend(
    'toHaveDefaultBody',
    fn (): ArchExpectation => // @phpstan-ignore-next-line
    $this->toHaveMethod('defaultBody')
);
