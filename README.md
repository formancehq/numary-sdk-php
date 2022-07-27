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


$apiInstance = new Numary\Ledger\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:001; // string | Exact address of the account. It must match the following regular expressions pattern: ``` ^\\w+(:\\w+)*$ ```
$request_body = NULL; // array<string,mixed> | metadata

try {
    $apiInstance->addMetadataToAccount($ledger, $address, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->addMetadataToAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://.o.numary.cloud/ledger*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**addMetadataToAccount**](docs/Api/AccountsApi.md#addmetadatatoaccount) | **POST** /{ledger}/accounts/{address}/metadata | Add metadata to an account.
*AccountsApi* | [**countAccounts**](docs/Api/AccountsApi.md#countaccounts) | **HEAD** /{ledger}/accounts | Count the accounts from a ledger.
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /{ledger}/accounts/{address} | Get account by its address.
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /{ledger}/accounts | List accounts from a ledger.
*BalancesApi* | [**getBalances**](docs/Api/BalancesApi.md#getbalances) | **GET** /{ledger}/balances | Get the balances from a ledger&#39;s account
*BalancesApi* | [**getBalancesAggregated**](docs/Api/BalancesApi.md#getbalancesaggregated) | **GET** /{ledger}/aggregate/balances | Get the aggregated balances from selected accounts
*MappingApi* | [**getMapping**](docs/Api/MappingApi.md#getmapping) | **GET** /{ledger}/mapping | Get the mapping of a ledger.
*MappingApi* | [**updateMapping**](docs/Api/MappingApi.md#updatemapping) | **PUT** /{ledger}/mapping | Update the mapping of a ledger.
*ScriptApi* | [**runScript**](docs/Api/ScriptApi.md#runscript) | **POST** /{ledger}/script | Execute a Numscript.
*ServerApi* | [**getInfo**](docs/Api/ServerApi.md#getinfo) | **GET** /_info | Show server information.
*StatsApi* | [**readStats**](docs/Api/StatsApi.md#readstats) | **GET** /{ledger}/stats | Get Stats
*TransactionsApi* | [**addMetadataOnTransaction**](docs/Api/TransactionsApi.md#addmetadataontransaction) | **POST** /{ledger}/transactions/{txid}/metadata | Set the metadata of a transaction by its ID.
*TransactionsApi* | [**countTransactions**](docs/Api/TransactionsApi.md#counttransactions) | **HEAD** /{ledger}/transactions | Count the transactions from a ledger.
*TransactionsApi* | [**createTransaction**](docs/Api/TransactionsApi.md#createtransaction) | **POST** /{ledger}/transactions | Create a new transaction to a ledger.
*TransactionsApi* | [**createTransactions**](docs/Api/TransactionsApi.md#createtransactions) | **POST** /{ledger}/transactions/batch | Create a new batch of transactions to a ledger.
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /{ledger}/transactions/{txid} | Get transaction from a ledger by its ID.
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /{ledger}/transactions | List transactions from a ledger.
*TransactionsApi* | [**revertTransaction**](docs/Api/TransactionsApi.md#reverttransaction) | **POST** /{ledger}/transactions/{txid}/revert | Revert a ledger transaction by its ID.

## Models

- [Account](docs/Model/Account.md)
- [AccountWithVolumesAndBalances](docs/Model/AccountWithVolumesAndBalances.md)
- [Config](docs/Model/Config.md)
- [ConfigInfo](docs/Model/ConfigInfo.md)
- [ConfigInfoResponse](docs/Model/ConfigInfoResponse.md)
- [Contract](docs/Model/Contract.md)
- [CreateTransaction400Response](docs/Model/CreateTransaction400Response.md)
- [CreateTransaction409Response](docs/Model/CreateTransaction409Response.md)
- [CreateTransactions400Response](docs/Model/CreateTransactions400Response.md)
- [Cursor](docs/Model/Cursor.md)
- [ErrorCode](docs/Model/ErrorCode.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [GetAccount200Response](docs/Model/GetAccount200Response.md)
- [GetAccount400Response](docs/Model/GetAccount400Response.md)
- [GetBalances200Response](docs/Model/GetBalances200Response.md)
- [GetBalances200ResponseCursor](docs/Model/GetBalances200ResponseCursor.md)
- [GetBalances200ResponseCursorAllOf](docs/Model/GetBalances200ResponseCursorAllOf.md)
- [GetBalancesAggregated200Response](docs/Model/GetBalancesAggregated200Response.md)
- [GetBalancesAggregated400Response](docs/Model/GetBalancesAggregated400Response.md)
- [GetTransaction400Response](docs/Model/GetTransaction400Response.md)
- [GetTransaction404Response](docs/Model/GetTransaction404Response.md)
- [LedgerStorage](docs/Model/LedgerStorage.md)
- [ListAccounts200Response](docs/Model/ListAccounts200Response.md)
- [ListAccounts200ResponseCursor](docs/Model/ListAccounts200ResponseCursor.md)
- [ListAccounts200ResponseCursorAllOf](docs/Model/ListAccounts200ResponseCursorAllOf.md)
- [ListAccounts400Response](docs/Model/ListAccounts400Response.md)
- [ListTransactions200Response](docs/Model/ListTransactions200Response.md)
- [ListTransactions200ResponseCursor](docs/Model/ListTransactions200ResponseCursor.md)
- [ListTransactions200ResponseCursorAllOf](docs/Model/ListTransactions200ResponseCursorAllOf.md)
- [Mapping](docs/Model/Mapping.md)
- [MappingResponse](docs/Model/MappingResponse.md)
- [Posting](docs/Model/Posting.md)
- [Script](docs/Model/Script.md)
- [ScriptResult](docs/Model/ScriptResult.md)
- [Stats](docs/Model/Stats.md)
- [StatsResponse](docs/Model/StatsResponse.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionData](docs/Model/TransactionData.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [Transactions](docs/Model/Transactions.md)
- [TransactionsResponse](docs/Model/TransactionsResponse.md)
- [Volume](docs/Model/Volume.md)

## Authorization


### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.7.0-beta.3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
