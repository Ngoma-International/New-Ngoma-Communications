<?php

declare(strict_types=1);

namespace Scott\FilePont\Facades;

use Clockwork\Support\Laravel\Facade;

class FilePont extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'filepont';
    }
}
