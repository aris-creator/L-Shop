<?php

namespace Tests;

use App\Traits\ContainerTrait;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    use ContainerTrait;

    protected function authenticateUser()
    {
        if (!\Sentinel::authenticate(['username' => 'user', 'password' => 'user'])) {
            throw new \RuntimeException('Can not authorize user');
        }
    }

    protected function authenticateAdmin()
    {
        if (!\Sentinel::authenticate(['username' => 'admin', 'password' => 'admin'])) {
            throw new \RuntimeException('Can not authorize admin');
        }
    }
}
