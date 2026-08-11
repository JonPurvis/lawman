<?php

declare(strict_types=1);

function getPropertiesClass(mixed $value): string
{
    if (! is_string($value) || ! class_exists($value)) {
        throw new InvalidArgumentException('Expected a class string.');
    }

    return $value;
}

function getPropertyDefaultValue(mixed $value, string $property): mixed
{
    $class = new ReflectionClass(getPropertiesClass($value));

    return $class->getProperty($property)
        ->getValue($class->newInstanceWithoutConstructor());
}

expect()->extend(
    'toSetConnectTimeout',
    fn (int $connectTimeout = 10) => expect(property_exists(getPropertiesClass($this->value), 'connectTimeout'))->toBeTrue()
        ->and(getPropertyDefaultValue($this->value, 'connectTimeout'))
        ->toEqual($connectTimeout)
);

expect()->extend(
    'toSetRequestTimeout',
    fn (int $requestTimeout = 30) => expect(property_exists(getPropertiesClass($this->value), 'requestTimeout'))->toBeTrue()
        ->and(getPropertyDefaultValue($this->value, 'requestTimeout'))
        ->toEqual($requestTimeout)
);

expect()->extend(
    'toBeTriedAgainOnFailure',
    fn (int $tries = 3) => expect(property_exists(getPropertiesClass($this->value), 'tries'))->toBeTrue()
        ->and(getPropertyDefaultValue($this->value, 'tries'))
        ->toEqual($tries)
);

expect()->extend(
    'toHaveRetryInterval',
    fn (int $retryInterval = 500) => expect(property_exists(getPropertiesClass($this->value), 'retryInterval'))->toBeTrue()
        ->and(getPropertyDefaultValue($this->value, 'retryInterval'))
        ->toEqual($retryInterval)
);

expect()->extend(
    'toUseExponentialBackoff',
    fn () => expect(property_exists(getPropertiesClass($this->value), 'useExponentialBackoff'))->toBeTrue()
        ->and(getPropertyDefaultValue($this->value, 'useExponentialBackoff'))
        ->toBeTrue()
);

expect()->extend(
    'toThrowOnMaxTries',
    fn () => expect(property_exists(getPropertiesClass($this->value), 'throwOnMaxTries'))->toBeTrue()
        ->and(getPropertyDefaultValue($this->value, 'throwOnMaxTries'))
        ->toBeTrue()
);
