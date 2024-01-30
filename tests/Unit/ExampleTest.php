<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $databaseName = (new User)->getConnection()->getDatabaseName();
        $this->assertStringContainsString('testing_test_', $databaseName);
    }
}
