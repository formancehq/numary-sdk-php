<?php

namespace OpenAPI\Client\Test\Api;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\TransactionsApi;
use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\TransactionData;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

abstract class ApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     * @throws \Exception
     */
    public function setUp(): void
    {
        $this->config = new Configuration();
        $this->config->setHost("http://localhost:3068");
        $this->ledger = bin2hex(random_bytes(16));
        $this->httpClient = new Client();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }
}
