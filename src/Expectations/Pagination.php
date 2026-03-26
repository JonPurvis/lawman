<?php

declare(strict_types=1);

use Pest\Expectation;

/**
 * @param  class-string  $class
 */
function lawmanPaginateReturnTypeName(string $class): string
{
    $type = (new \ReflectionClass($class))->getMethod('paginate')->getReturnType();
    if (! $type instanceof \ReflectionNamedType) {
        throw new RuntimeException('paginate() must declare a single named return type.');
    }

    return $type->getName();
}

/**
 * @param  class-string  $class
 */
function lawmanPaginateFirstParameterType(string $class): string
{
    $method = (new \ReflectionClass($class))->getMethod('paginate');
    $parameters = $method->getParameters();
    $first = $parameters[0] ?? throw new RuntimeException('paginate() must declare at least one parameter.');
    $type = $first->getType();
    if (! $type instanceof \ReflectionNamedType) {
        throw new RuntimeException('paginate() first parameter must use a single named type.');
    }

    return $type->getName();
}

expect()->extend(
    'toUsePagedPagination',
    function (): Expectation {
        /** @phpstan-ignore-next-line */
        $class = $this->value;

        /** @phpstan-ignore-next-line */
        return $this->toImplement(\Saloon\PaginationPlugin\Contracts\HasPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(\Saloon\PaginationPlugin\PagedPaginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(\Saloon\Http\Request::class);
    }
);

expect()->extend(
    'toUseOffsetPagination',
    function (): Expectation {
        /** @phpstan-ignore-next-line */
        $class = $this->value;

        /** @phpstan-ignore-next-line */
        return $this->toImplement(\Saloon\PaginationPlugin\Contracts\HasPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(\Saloon\PaginationPlugin\OffsetPaginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(\Saloon\Http\Request::class);
    }
);

expect()->extend(
    'toUseCursorPagination',
    function (): Expectation {
        /** @phpstan-ignore-next-line */
        $class = $this->value;

        /** @phpstan-ignore-next-line */
        return $this->toImplement(\Saloon\PaginationPlugin\Contracts\HasPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(\Saloon\PaginationPlugin\CursorPaginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(\Saloon\Http\Request::class);
    }
);

expect()->extend(
    'toUseCustomPagination',
    function (): Expectation {
        /** @phpstan-ignore-next-line */
        $class = $this->value;

        /** @phpstan-ignore-next-line */
        return $this->toImplement(\Saloon\PaginationPlugin\Contracts\HasPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(\Saloon\PaginationPlugin\Paginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(\Saloon\Http\Request::class);
    }
);

expect()->extend(
    'toUseRequestPagination',
    function (): Expectation {
        /** @phpstan-ignore-next-line */
        $class = $this->value;

        /** @phpstan-ignore-next-line */
        return $this->toImplement(\Saloon\PaginationPlugin\Contracts\HasRequestPagination::class)
            ->and(lawmanPaginateReturnTypeName($class))
            ->toEqual(\Saloon\PaginationPlugin\Paginator::class)
            ->and(lawmanPaginateFirstParameterType($class))
            ->toEqual(\Saloon\Http\Connector::class);
    }
);
