<?php

declare(strict_types=1);

namespace Tests\Fixtures\Arch\ToHaveDefaultSender;

use Saloon\Contracts\Sender;
use Saloon\Http\Connector;
use Saloon\Http\Senders\GuzzleSender;

class ToHaveDefaultSender extends Connector
{
    protected function defaultSender(): Sender
    {
        return new GuzzleSender;
    }

    public function resolveBaseUrl(): string
    {
        return '';
    }
}
