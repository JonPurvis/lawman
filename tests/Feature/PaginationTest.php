<?php

declare(strict_types=1);
use Tests\Fixtures\Arch\ToUseCursorPagination\ToUseCursorPagination;
use Tests\Fixtures\Arch\ToUseCustomPagination\ToUseCustomPagination;
use Tests\Fixtures\Arch\ToUseOffsetPagination\ToUseOffsetPagination;
use Tests\Fixtures\Arch\ToUsePagedPagination\ToUsePagedPagination;
use Tests\Fixtures\Arch\ToUseRequestPagination\ToUseRequestPagination;

it('checks that a class uses paged pagination', function (): void {
    expect(ToUsePagedPagination::class)
        ->toUsePagedPagination();
});

it('checks that a class uses offset pagination', function (): void {
    expect(ToUseOffsetPagination::class)
        ->toUseOffsetPagination();
});

it('checks that a class uses cursor pagination', function (): void {
    expect(ToUseCursorPagination::class)
        ->toUseCursorPagination();
});

it('checks that a class uses custom pagination', function (): void {
    expect(ToUseCustomPagination::class)
        ->toUseCustomPagination();
});

it('checks that a class uses request pagination', function (): void {
    expect(ToUseRequestPagination::class)
        ->toUseRequestPagination();
});
