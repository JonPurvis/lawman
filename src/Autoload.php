<?php

declare(strict_types=1);

namespace Pest\PluginName;

expect()->extend('toBeSaloonConnector', function () {
    return $this->toExtend('Saloon\Http\Connector');  // @phpstan-ignore-line
});
