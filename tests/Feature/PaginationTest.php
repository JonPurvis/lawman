<?php

declare(strict_types=1);

it('checks that a class uses paged pagination', function () {
    expect('Tests\Fixtures\Arch\ToUsePagedPagination\ToUsePagedPagination')
        ->toUsePagedPagination();
});

it('checks that a class uses offset pagination', function () {
    expect('Tests\Fixtures\Arch\ToUseOffsetPagination\ToUseOffsetPagination')
        ->toUseOffsetPagination();
});

it('checks that a class uses cursor pagination', function () {
    expect('Tests\Fixtures\Arch\ToUseCursorPagination\ToUseCursorPagination')
        ->toUseCursorPagination();
});

it('checks that a class uses custom pagination', function () {
    expect('Tests\Fixtures\Arch\ToUseCustomPagination\ToUseCustomPagination')
        ->toUseCustomPagination();
});
