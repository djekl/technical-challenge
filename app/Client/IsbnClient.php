<?php

namespace App\Client;

use Illuminate\Support\Str;
use Ramsey\Uuid\UuidInterface;

class IsbnClient
{
    public function __construct(
        private string $username,
        private string $password
    ) {
    }

    public function get(UuidInterface $uuid): string
    {
        // To simulate an expensive HTTP call, we're sleeping here.
        // In a real system, this would call out to an external service.
        sleep(3);

        $integer = Str::of($uuid->getInteger());

        return sprintf('%s-%s-%s-%s-%s',
            $integer->substr(0, 3),
            $integer->substr(3, 2),
            $integer->substr(5, 5),
            $integer->substr(10, 2),
            $integer->substr(12, 1)
        );
    }
}
