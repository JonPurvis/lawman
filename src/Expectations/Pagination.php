<?php

declare(strict_types=1);

use Pest\Expectation;

expect()->extend(
    'toUsePagedPagination',
    fn (): Expectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\PaginationPlugin\Contracts\HasPagination')
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
            ->getMethod('paginate')
            ->getReturnType()->getName())
        ->toEqual('Saloon\PaginationPlugin\PagedPaginator')
);

expect()->extend(
    'toUseOffsetPagination',
    fn (): Expectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\PaginationPlugin\Contracts\HasPagination')
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
            ->getMethod('paginate')
            ->getReturnType()->getName())
        ->toEqual('Saloon\PaginationPlugin\OffsetPaginator')
);

expect()->extend(
    'toUseCursorPagination',
    fn (): Expectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\PaginationPlugin\Contracts\HasPagination')
        ->and((new ReflectionClass($this->value)) // @phpstan-ignore-line
            ->getMethod('paginate')
            ->getReturnType()->getName())
        ->toEqual('Saloon\PaginationPlugin\CursorPaginator')
);

expect()->extend(
    'toUseCustomPagination',
    fn (): Expectation => // @phpstan-ignore-next-line
    $this->toImplement('Saloon\PaginationPlugin\Contracts\HasPagination')
        ->and((new ReflectionClass($this->value))   // @phpstan-ignore-line
            ->getMethod('paginate')
            ->getReturnType()->getName())
        ->toEqual('Saloon\PaginationPlugin\Paginator')
);
