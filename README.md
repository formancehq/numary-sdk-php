# PHP API client for Numary

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/numary/numary-sdk-php.git"
    }
  ],
  "require": {
    "numary/numary-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: cloudToken
$config = Numary\Ledger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Numary\Ledger\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = 'ledger_example'; // string | ledger
$account_id = 'account_id_example'; // string | accountId
$request_body = NULL; // array<string,mixed> | metadata

try {
    $apiInstance->addMetadataToAccount($ledger, $account_id, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->addMetadataToAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**addMetadataToAccount**](docs/Api/AccountsApi.md#addmetadatatoaccount) | **POST** /{ledger}/accounts/{accountId}/metadata | Add metadata to account
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /{ledger}/accounts/{accountId} | Get account by address
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /{ledger}/accounts | List all accounts
*MappingApi* | [**getMapping**](docs/Api/MappingApi.md#getmapping) | **GET** /{ledger}/mapping | Get mapping
*MappingApi* | [**updateMapping**](docs/Api/MappingApi.md#updatemapping) | **PUT** /{ledger}/mapping | Put mapping
*ScriptApi* | [**runScript**](docs/Api/ScriptApi.md#runscript) | **POST** /{ledger}/script | Execute Numscript
*ServerApi* | [**getInfo**](docs/Api/ServerApi.md#getinfo) | **GET** /_info | Server Info
*StatsApi* | [**readStats**](docs/Api/StatsApi.md#readstats) | **GET** /{ledger}/stats | Get Stats
*TransactionsApi* | [**addMetadataOnTransaction**](docs/Api/TransactionsApi.md#addmetadataontransaction) | **POST** /{ledger}/transactions/{txid}/metadata | Set Transaction Metadata
*TransactionsApi* | [**createTransaction**](docs/Api/TransactionsApi.md#createtransaction) | **POST** /{ledger}/transactions | Create Transaction
*TransactionsApi* | [**createTransactions**](docs/Api/TransactionsApi.md#createtransactions) | **POST** /{ledger}/transactions/batch | Create Transactions Batch
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /{ledger}/transactions/{txid} | Get Transaction
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /{ledger}/transactions | Get all Transactions
*TransactionsApi* | [**revertTransaction**](docs/Api/TransactionsApi.md#reverttransaction) | **POST** /{ledger}/transactions/{txid}/revert | Revert Transaction

## Models

- [Account](docs/Model/Account.md)
- [AccountCursor](docs/Model/AccountCursor.md)
- [AccountCursorAllOf](docs/Model/AccountCursorAllOf.md)
- [AccountCursorResponse](docs/Model/AccountCursorResponse.md)
- [AccountResponse](docs/Model/AccountResponse.md)
- [Config](docs/Model/Config.md)
- [ConfigInfo](docs/Model/ConfigInfo.md)
- [ConfigInfoResponse](docs/Model/ConfigInfoResponse.md)
- [Contract](docs/Model/Contract.md)
- [CreateTransactionResponse](docs/Model/CreateTransactionResponse.md)
- [Cursor](docs/Model/Cursor.md)
- [CursorResponse](docs/Model/CursorResponse.md)
- [ErrorCode](docs/Model/ErrorCode.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [LedgerStorage](docs/Model/LedgerStorage.md)
- [Mapping](docs/Model/Mapping.md)
- [MappingResponse](docs/Model/MappingResponse.md)
- [Posting](docs/Model/Posting.md)
- [Script](docs/Model/Script.md)
- [ScriptResult](docs/Model/ScriptResult.md)
- [Stats](docs/Model/Stats.md)
- [StatsResponse](docs/Model/StatsResponse.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionCommitError](docs/Model/TransactionCommitError.md)
- [TransactionCommitErrorAllOf](docs/Model/TransactionCommitErrorAllOf.md)
- [TransactionCommitErrorResponse](docs/Model/TransactionCommitErrorResponse.md)
- [TransactionCursor](docs/Model/TransactionCursor.md)
- [TransactionCursorAllOf](docs/Model/TransactionCursorAllOf.md)
- [TransactionCursorResponse](docs/Model/TransactionCursorResponse.md)
- [TransactionData](docs/Model/TransactionData.md)
- [TransactionListResponse](docs/Model/TransactionListResponse.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [Transactions](docs/Model/Transactions.md)

## Authorization


### basicAuth

- **Type**: HTTP basic authentication



### cloudToken

- **Type**: Bearer authentication

Library provide utility to fetch access token from Numary authorization server

```php
use Numary\Ledger\Api\TransactionsApi;
use Numary\Ledger\Api\Configuration;
use Numary\Ledger\Cloud\TokenFetcher;
use GuzzleHttp\Client;

$tokenFetcher = new TokenFetcher(TokenFetcher::$endpoint, "API KEY");
$token = $tokenFetcher->fetchToken();
$config = new Configuration();
$config->setAccessToken($token);
$config->setHost("https://api.numary.cloud/ledger");
$transactionApi = new TransactionsApi(new Client(), $config);
```


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.2.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
