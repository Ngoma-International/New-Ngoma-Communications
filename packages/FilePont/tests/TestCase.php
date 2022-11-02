<?php

declare(strict_types=1);

namespace Scott\FilePont\Tests;

use Scott\FilePont\FilePontServiceProvider;

class TestCase extends \Tests\TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            FilePontServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
