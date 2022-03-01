# Numary\Ledger\TransactionsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMetadataOnTransaction()**](TransactionsApi.md#addMetadataOnTransaction) | **POST** /{ledger}/transactions/{txid}/metadata | Set Transaction Metadata
[**createTransaction()**](TransactionsApi.md#createTransaction) | **POST** /{ledger}/transactions | Create Transaction
[**createTransactions()**](TransactionsApi.md#createTransactions) | **POST** /{ledger}/transactions/batch | Create Transactions Batch
[**getTransaction()**](TransactionsApi.md#getTransaction) | **GET** /{ledger}/transactions/{txid} | Get Transaction
[**listTransactions()**](TransactionsApi.md#listTransactions) | **GET** /{ledger}/transactions | Get all Transactions
[**revertTransaction()**](TransactionsApi.md#revertTransaction) | **POST** /{ledger}/transactions/{txid}/revert | Revert Transaction


## `addMetadataOnTransaction()`

```php
addMetadataOnTransaction($ledger, $txid, $request_body)
```

Set Transaction Metadata

Set a new metadata to a ledger transaction by transaction id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: cloudToken
$config = Numary\Ledger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Numary\Ledger\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = 'ledger_example'; // string | ledger
$txid = 56; // int | txid
$request_body = NULL; // array<string,mixed> | metadata

try {
    $apiInstance->addMetadataOnTransaction($ledger, $txid, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->addMetadataOnTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| ledger |
 **txid** | **int**| txid |
 **request_body** | [**array<string,mixed>**](../Model/mixed.md)| metadata | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [cloudToken](../../README.md#cloudToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransaction()`

```php
createTransaction($ledger, $transaction_data, $preview): \Numary\Ledger\Model\CreateTransactionResponse
```

Create Transaction

Create a new ledger transaction Commit a new transaction to the ledger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: cloudToken
$config = Numary\Ledger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Numary\Ledger\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = 'ledger_example'; // string | ledger
$transaction_data = new \Numary\Ledger\Model\TransactionData(); // \Numary\Ledger\Model\TransactionData | transaction
$preview = 'preview_example'; // string | Preview mode

try {
    $result = $apiInstance->createTransaction($ledger, $transaction_data, $preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| ledger |
 **transaction_data** | [**\Numary\Ledger\Model\TransactionData**](../Model/TransactionData.md)| transaction |
 **preview** | **string**| Preview mode | [optional]

### Return type

[**\Numary\Ledger\Model\CreateTransactionResponse**](../Model/CreateTransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [cloudToken](../../README.md#cloudToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransactions()`

```php
createTransactions($ledger, $transactions): \Numary\Ledger\Model\TransactionListResponse
```

Create Transactions Batch

Create a new ledger transactions batch Commit a batch of new transactions to the ledger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: cloudToken
$config = Numary\Ledger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Numary\Ledger\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = 'ledger_example'; // string | ledger
$transactions = new \Numary\Ledger\Model\Transactions(); // \Numary\Ledger\Model\Transactions | transactions

try {
    $result = $apiInstance->createTransactions($ledger, $transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| ledger |
 **transactions** | [**\Numary\Ledger\Model\Transactions**](../Model/Transactions.md)| transactions |

### Return type

[**\Numary\Ledger\Model\TransactionListResponse**](../Model/TransactionListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [cloudToken](../../README.md#cloudToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransaction()`

```php
getTransaction($ledger, $txid): \Numary\Ledger\Model\TransactionResponse
```

Get Transaction

Get transaction by transaction id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: cloudToken
$config = Numary\Ledger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Numary\Ledger\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = 'ledger_example'; // string | ledger
$txid = 56; // int | txid

try {
    $result = $apiInstance->getTransaction($ledger, $txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| ledger |
 **txid** | **int**| txid |

### Return type

[**\Numary\Ledger\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [cloudToken](../../README.md#cloudToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactions()`

```php
listTransactions($ledger, $after, $reference, $account): \Numary\Ledger\Model\TransactionCursorResponse
```

Get all Transactions

Get all ledger transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: cloudToken
$config = Numary\Ledger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Numary\Ledger\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = 'ledger_example'; // string | ledger
$after = 'after_example'; // string | pagination cursor, will return transactions after given txid (in descending order)
$reference = 'reference_example'; // string | find transactions by reference field
$account = 'account_example'; // string | find transactions with postings involving given account, either as source or destination

try {
    $result = $apiInstance->listTransactions($ledger, $after, $reference, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| ledger |
 **after** | **string**| pagination cursor, will return transactions after given txid (in descending order) | [optional]
 **reference** | **string**| find transactions by reference field | [optional]
 **account** | **string**| find transactions with postings involving given account, either as source or destination | [optional]

### Return type

[**\Numary\Ledger\Model\TransactionCursorResponse**](../Model/TransactionCursorResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [cloudToken](../../README.md#cloudToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revertTransaction()`

```php
revertTransaction($ledger, $txid): \Numary\Ledger\Model\TransactionResponse
```

Revert Transaction

Revert a ledger transaction by transaction id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: cloudToken
$config = Numary\Ledger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Numary\Ledger\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = 'ledger_example'; // string | ledger
$txid = 56; // int | txid

try {
    $result = $apiInstance->revertTransaction($ledger, $txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->revertTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| ledger |
 **txid** | **int**| txid |

### Return type

[**\Numary\Ledger\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [cloudToken](../../README.md#cloudToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
