<?php

declare(strict_types=1);

use Pest\Arch\Contracts\ArchExpectation;

expect()->extend(
    'toBeSaloonPlugin',
    fn (): ArchExpectation => $this->toBeTrait()
);
