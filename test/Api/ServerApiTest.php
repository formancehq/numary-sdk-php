<?php
/**
 * ServerApiTest
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ledger API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use OpenAPI\Client\Api\ServerApi;
use OpenAPI\Client\Api\TransactionsApi;
use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\TransactionData;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ServerApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServerApiTest extends ApiTest
{

    /**
     * Setup before running each test case
     * @throws \Exception
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->serverApi = new ServerApi($this->httpClient, $this->config);
        $this->transactionApi = new TransactionsApi($this->httpClient, $this->config);
    }

    /**
     * Test case for getInfo
     *
     * Server Info.
     *
     * @throws ApiException
     */
    public function testGetInfo()
    {
        $this->transactionApi->createTransaction($this->ledger, new TransactionData([
            "postings" => [
                [
                    "source" => "world",
                    "destination" => "player1",
                    "amount" => 100,
                    "asset" => "USD"
                ]
            ]
        ]));

        $info = $this->serverApi->getInfo();
        $this->assertContains($this->ledger, $info->getData()->getConfig()->getStorage()->getLedgers());
    }
}
