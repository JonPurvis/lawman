<?php

declare(strict_types=1);

use Pest\Expectation;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use Saloon\PaginationPlugin\CursorPaginator;
use Saloon\PaginationPlugin\OffsetPaginator;
use Saloon\PaginationPlugin\PagedPaginator;
use Saloon\PaginationPlugin\Paginator;

/**
 * @return class-string
 */
function lawmanExpectationClassName(mixed $value): string
{
    if (! is_string($value)) {
        throw new InvalidArgumentException('Expectation value must be a class name string.');
    }
    if (class_exists($value)) {
        return $value;
    }
    if (interface_exists($value)) {
        return $value;
    }
    throw new InvalidArgumentException('Expectation value must be an existing class or interface.');
}

/**
 * @param  class-string  $class
 */
function lawmanPaginateReturnTypeName(string $class): string
{
    $type = (new ReflectionClass($class))->getMethod('paginate')->getReturnType();
    if (! $type instanceof ReflectionNamedType) {
        throw new RuntimeException('paginate() must declare a single named return type.');
    }

    return $type->getName();
}

/**
 * @param  class-string  $class
 */
function lawmanPaginateFirstParameterType(string $class): string
{
    $method = (new ReflectionClass($class))->getMethod('paginate');
    $parameters = $method->getParameters();
    $first = $parameters[0] ?? throw new RuntimeException('paginate() must declare at least one parameter.');
    $type = $first->getType();
    if (! $type instanceof ReflectionNamedType) {
        throw new RuntimeException('paginate() first parameter must use a single named type.');
    }

    return $type->getName();
}

expect()->extend(
    'toUsePagedPagination',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        return $this->toImplement(HasPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(PagedPaginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(Request::class);
    }
);

expect()->extend(
    'toUseOffsetPagination',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        return $this->toImplement(HasPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(OffsetPaginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(Request::class);
    }
);

expect()->extend(
    'toUseCursorPagination',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        return $this->toImplement(HasPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(CursorPaginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(Request::class);
    }
);

expect()->extend(
    'toUseCustomPagination',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        return $this->toImplement(HasPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(Paginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(Request::class);
    }
);

expect()->extend(
    'toUseRequestPagination',
    function (): Expectation {
        $class = lawmanExpectationClassName($this->value);

        return $this->toImplement(HasRequestPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(Paginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(Connector::class);
    }
);
