<?php

namespace Tests\Feature;

use App\Models\User;
use Laravel\BrowserKitTesting\TestCase as BaseTestCase;
use Tests\CreatesApplication;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends BaseTestCase
{
    use CreatesApplication, DatabaseTransactions;

    protected $baseUrl = '';

    public function test_the_application_returns_a_successful_response(): void
    {
        $databaseName = (new User)->getConnection()->getDatabaseName();
        $this->assertStringContainsString('testing_test_', $databaseName);
    }
}
