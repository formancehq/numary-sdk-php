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
      "url": "https://github.com/formancehq/numary-sdk-php.git"
    }
  ],
  "require": {
    "formancehq/numary-sdk-php": "*@dev"
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




$apiInstance = new Numary\Ledger\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**addMetadataToAccount**](docs/Api/AccountsApi.md#addmetadatatoaccount) | **POST** /{ledger}/accounts/{address}/metadata | Add metadata to an account
*AccountsApi* | [**countAccounts**](docs/Api/AccountsApi.md#countaccounts) | **HEAD** /{ledger}/accounts | Count the accounts from a ledger
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /{ledger}/accounts/{address} | Get account by its address
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /{ledger}/accounts | List accounts from a ledger
*BalancesApi* | [**getBalances**](docs/Api/BalancesApi.md#getbalances) | **GET** /{ledger}/balances | Get the balances from a ledger&#39;s account
*BalancesApi* | [**getBalancesAggregated**](docs/Api/BalancesApi.md#getbalancesaggregated) | **GET** /{ledger}/aggregate/balances | Get the aggregated balances from selected accounts
*LedgerApi* | [**addMetadataOnTransaction**](docs/Api/LedgerApi.md#addmetadataontransaction) | **POST** /{ledger}/transactions/{txid}/metadata | Set the metadata of a transaction by its ID
*LedgerApi* | [**addMetadataToAccount**](docs/Api/LedgerApi.md#addmetadatatoaccount) | **POST** /{ledger}/accounts/{address}/metadata | Add metadata to an account
*LedgerApi* | [**countAccounts**](docs/Api/LedgerApi.md#countaccounts) | **HEAD** /{ledger}/accounts | Count the accounts from a ledger
*LedgerApi* | [**countTransactions**](docs/Api/LedgerApi.md#counttransactions) | **HEAD** /{ledger}/transactions | Count the transactions from a ledger
*LedgerApi* | [**createTransaction**](docs/Api/LedgerApi.md#createtransaction) | **POST** /{ledger}/transactions | Create a new transaction to a ledger
*LedgerApi* | [**createTransactions**](docs/Api/LedgerApi.md#createtransactions) | **POST** /{ledger}/transactions/batch | Create a new batch of transactions to a ledger
*LedgerApi* | [**getAccount**](docs/Api/LedgerApi.md#getaccount) | **GET** /{ledger}/accounts/{address} | Get account by its address
*LedgerApi* | [**getBalances**](docs/Api/LedgerApi.md#getbalances) | **GET** /{ledger}/balances | Get the balances from a ledger&#39;s account
*LedgerApi* | [**getBalancesAggregated**](docs/Api/LedgerApi.md#getbalancesaggregated) | **GET** /{ledger}/aggregate/balances | Get the aggregated balances from selected accounts
*LedgerApi* | [**getInfo**](docs/Api/LedgerApi.md#getinfo) | **GET** /_info | Show server information
*LedgerApi* | [**getLedgerInfo**](docs/Api/LedgerApi.md#getledgerinfo) | **GET** /{ledger}/_info | Get information about a ledger
*LedgerApi* | [**getMapping**](docs/Api/LedgerApi.md#getmapping) | **GET** /{ledger}/mapping | Get the mapping of a ledger
*LedgerApi* | [**getTransaction**](docs/Api/LedgerApi.md#gettransaction) | **GET** /{ledger}/transactions/{txid} | Get transaction from a ledger by its ID
*LedgerApi* | [**listAccounts**](docs/Api/LedgerApi.md#listaccounts) | **GET** /{ledger}/accounts | List accounts from a ledger
*LedgerApi* | [**listLogs**](docs/Api/LedgerApi.md#listlogs) | **GET** /{ledger}/logs | List the logs from a ledger
*LedgerApi* | [**listTransactions**](docs/Api/LedgerApi.md#listtransactions) | **GET** /{ledger}/transactions | List transactions from a ledger
*LedgerApi* | [**readStats**](docs/Api/LedgerApi.md#readstats) | **GET** /{ledger}/stats | Get statistics from a ledger
*LedgerApi* | [**revertTransaction**](docs/Api/LedgerApi.md#reverttransaction) | **POST** /{ledger}/transactions/{txid}/revert | Revert a ledger transaction by its ID
*LedgerApi* | [**runScript**](docs/Api/LedgerApi.md#runscript) | **POST** /{ledger}/script | Execute a Numscript
*LedgerApi* | [**updateMapping**](docs/Api/LedgerApi.md#updatemapping) | **PUT** /{ledger}/mapping | Update the mapping of a ledger
*LogsApi* | [**listLogs**](docs/Api/LogsApi.md#listlogs) | **GET** /{ledger}/logs | List the logs from a ledger
*MappingApi* | [**getMapping**](docs/Api/MappingApi.md#getmapping) | **GET** /{ledger}/mapping | Get the mapping of a ledger
*MappingApi* | [**updateMapping**](docs/Api/MappingApi.md#updatemapping) | **PUT** /{ledger}/mapping | Update the mapping of a ledger
*ScriptApi* | [**runScript**](docs/Api/ScriptApi.md#runscript) | **POST** /{ledger}/script | Execute a Numscript
*ServerApi* | [**getInfo**](docs/Api/ServerApi.md#getinfo) | **GET** /_info | Show server information
*StatsApi* | [**readStats**](docs/Api/StatsApi.md#readstats) | **GET** /{ledger}/stats | Get statistics from a ledger
*TransactionsApi* | [**addMetadataOnTransaction**](docs/Api/TransactionsApi.md#addmetadataontransaction) | **POST** /{ledger}/transactions/{txid}/metadata | Set the metadata of a transaction by its ID
*TransactionsApi* | [**countTransactions**](docs/Api/TransactionsApi.md#counttransactions) | **HEAD** /{ledger}/transactions | Count the transactions from a ledger
*TransactionsApi* | [**createTransaction**](docs/Api/TransactionsApi.md#createtransaction) | **POST** /{ledger}/transactions | Create a new transaction to a ledger
*TransactionsApi* | [**createTransactions**](docs/Api/TransactionsApi.md#createtransactions) | **POST** /{ledger}/transactions/batch | Create a new batch of transactions to a ledger
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /{ledger}/transactions/{txid} | Get transaction from a ledger by its ID
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /{ledger}/transactions | List transactions from a ledger
*TransactionsApi* | [**revertTransaction**](docs/Api/TransactionsApi.md#reverttransaction) | **POST** /{ledger}/transactions/{txid}/revert | Revert a ledger transaction by its ID

## Models

- [Account](docs/Model/Account.md)
- [AccountResponse](docs/Model/AccountResponse.md)
- [AccountWithVolumesAndBalances](docs/Model/AccountWithVolumesAndBalances.md)
- [AccountsCursorResponse](docs/Model/AccountsCursorResponse.md)
- [AccountsCursorResponseCursor](docs/Model/AccountsCursorResponseCursor.md)
- [AggregateBalancesResponse](docs/Model/AggregateBalancesResponse.md)
- [BalancesCursorResponse](docs/Model/BalancesCursorResponse.md)
- [BalancesCursorResponseCursor](docs/Model/BalancesCursorResponseCursor.md)
- [Config](docs/Model/Config.md)
- [ConfigInfo](docs/Model/ConfigInfo.md)
- [ConfigInfoResponse](docs/Model/ConfigInfoResponse.md)
- [Contract](docs/Model/Contract.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorsEnum](docs/Model/ErrorsEnum.md)
- [LedgerInfo](docs/Model/LedgerInfo.md)
- [LedgerInfoResponse](docs/Model/LedgerInfoResponse.md)
- [LedgerInfoStorage](docs/Model/LedgerInfoStorage.md)
- [LedgerStorage](docs/Model/LedgerStorage.md)
- [Log](docs/Model/Log.md)
- [LogsCursorResponse](docs/Model/LogsCursorResponse.md)
- [LogsCursorResponseCursor](docs/Model/LogsCursorResponseCursor.md)
- [Mapping](docs/Model/Mapping.md)
- [MappingResponse](docs/Model/MappingResponse.md)
- [MigrationInfo](docs/Model/MigrationInfo.md)
- [PostTransaction](docs/Model/PostTransaction.md)
- [PostTransactionScript](docs/Model/PostTransactionScript.md)
- [Posting](docs/Model/Posting.md)
- [Script](docs/Model/Script.md)
- [ScriptResponse](docs/Model/ScriptResponse.md)
- [Stats](docs/Model/Stats.md)
- [StatsResponse](docs/Model/StatsResponse.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionData](docs/Model/TransactionData.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [Transactions](docs/Model/Transactions.md)
- [TransactionsCursorResponse](docs/Model/TransactionsCursorResponse.md)
- [TransactionsCursorResponseCursor](docs/Model/TransactionsCursorResponseCursor.md)
- [TransactionsResponse](docs/Model/TransactionsResponse.md)
- [Volume](docs/Model/Volume.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.11.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
