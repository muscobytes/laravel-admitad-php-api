<?php

use Muscobytes\LaravelAdmitadApi\AdmitadServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }


    protected function getPackageProviders($app): array
    {
        return [
            AdmitadServiceProvider::class,
        ];
    }


    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}