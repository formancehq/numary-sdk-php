# Numary\Ledger\LedgerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMetadataOnTransaction()**](LedgerApi.md#addMetadataOnTransaction) | **POST** /{ledger}/transactions/{txid}/metadata | Set the metadata of a transaction by its ID |
| [**addMetadataToAccount()**](LedgerApi.md#addMetadataToAccount) | **POST** /{ledger}/accounts/{address}/metadata | Add metadata to an account |
| [**countAccounts()**](LedgerApi.md#countAccounts) | **HEAD** /{ledger}/accounts | Count the accounts from a ledger |
| [**countTransactions()**](LedgerApi.md#countTransactions) | **HEAD** /{ledger}/transactions | Count the transactions from a ledger |
| [**createTransaction()**](LedgerApi.md#createTransaction) | **POST** /{ledger}/transactions | Create a new transaction to a ledger |
| [**createTransactions()**](LedgerApi.md#createTransactions) | **POST** /{ledger}/transactions/batch | Create a new batch of transactions to a ledger |
| [**getAccount()**](LedgerApi.md#getAccount) | **GET** /{ledger}/accounts/{address} | Get account by its address |
| [**getBalances()**](LedgerApi.md#getBalances) | **GET** /{ledger}/balances | Get the balances from a ledger&#39;s account |
| [**getBalancesAggregated()**](LedgerApi.md#getBalancesAggregated) | **GET** /{ledger}/aggregate/balances | Get the aggregated balances from selected accounts |
| [**getInfo()**](LedgerApi.md#getInfo) | **GET** /_info | Show server information |
| [**getLedgerInfo()**](LedgerApi.md#getLedgerInfo) | **GET** /{ledger}/_info | Get information about a ledger |
| [**getMapping()**](LedgerApi.md#getMapping) | **GET** /{ledger}/mapping | Get the mapping of a ledger |
| [**getTransaction()**](LedgerApi.md#getTransaction) | **GET** /{ledger}/transactions/{txid} | Get transaction from a ledger by its ID |
| [**listAccounts()**](LedgerApi.md#listAccounts) | **GET** /{ledger}/accounts | List accounts from a ledger |
| [**listLogs()**](LedgerApi.md#listLogs) | **GET** /{ledger}/logs | List the logs from a ledger |
| [**listTransactions()**](LedgerApi.md#listTransactions) | **GET** /{ledger}/transactions | List transactions from a ledger |
| [**readStats()**](LedgerApi.md#readStats) | **GET** /{ledger}/stats | Get statistics from a ledger |
| [**revertTransaction()**](LedgerApi.md#revertTransaction) | **POST** /{ledger}/transactions/{txid}/revert | Revert a ledger transaction by its ID |
| [**runScript()**](LedgerApi.md#runScript) | **POST** /{ledger}/script | Execute a Numscript |
| [**updateMapping()**](LedgerApi.md#updateMapping) | **PUT** /{ledger}/mapping | Update the mapping of a ledger |


## `addMetadataOnTransaction()`

```php
addMetadataOnTransaction($ledger, $txid, $request_body)
```

Set the metadata of a transaction by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$txid = 1234; // int | Transaction ID.
$request_body = NULL; // array<string,mixed> | metadata

try {
    $apiInstance->addMetadataOnTransaction($ledger, $txid, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->addMetadataOnTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **txid** | **int**| Transaction ID. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| metadata | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addMetadataToAccount()`

```php
addMetadataToAccount($ledger, $address, $request_body)
```

Add metadata to an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
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
    echo 'Exception when calling LedgerApi->addMetadataToAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Exact address of the account. It must match the following regular expressions pattern: &#x60;&#x60;&#x60; ^\\w+(:\\w+)*$ &#x60;&#x60;&#x60; | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| metadata | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countAccounts()`

```php
countAccounts($ledger, $address, $metadata)
```

Count the accounts from a ledger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:.+; // string | Filter accounts by address pattern (regular expression placed between ^ and $).
$metadata = metadata[key]=value1&metadata[a.nested.key]=value2; // object | Filter accounts by metadata key value pairs. The filter can be used like this metadata[key]=value1&metadata[a.nested.key]=value2

try {
    $apiInstance->countAccounts($ledger, $address, $metadata);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->countAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Filter accounts by address pattern (regular expression placed between ^ and $). | [optional] |
| **metadata** | [**object**](../Model/.md)| Filter accounts by metadata key value pairs. The filter can be used like this metadata[key]&#x3D;value1&amp;metadata[a.nested.key]&#x3D;value2 | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countTransactions()`

```php
countTransactions($ledger, $reference, $account, $source, $destination, $start_time, $start_time2, $end_time, $end_time2, $metadata)
```

Count the transactions from a ledger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$reference = ref:001; // string | Filter transactions by reference field.
$account = users:001; // string | Filter transactions with postings involving given account, either as source or destination (regular expression placed between ^ and $).
$source = users:001; // string | Filter transactions with postings involving given account at source (regular expression placed between ^ and $).
$destination = users:001; // string | Filter transactions with postings involving given account at destination (regular expression placed between ^ and $).
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \"2023-01-02T15:04:01Z\" includes the first second of 4th minute).
$start_time2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \"2023-01-02T15:04:01Z\" includes the first second of 4th minute). Deprecated, please use `startTime` instead.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \"2023-01-02T15:04:01Z\" excludes the first second of 4th minute).
$end_time2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \"2023-01-02T15:04:01Z\" excludes the first second of 4th minute). Deprecated, please use `endTime` instead.
$metadata = metadata[key]=value1&metadata[a.nested.key]=value2; // object | Filter transactions by metadata key value pairs. Nested objects can be used as seen in the example below.

try {
    $apiInstance->countTransactions($ledger, $reference, $account, $source, $destination, $start_time, $start_time2, $end_time, $end_time2, $metadata);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->countTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **reference** | **string**| Filter transactions by reference field. | [optional] |
| **account** | **string**| Filter transactions with postings involving given account, either as source or destination (regular expression placed between ^ and $). | [optional] |
| **source** | **string**| Filter transactions with postings involving given account at source (regular expression placed between ^ and $). | [optional] |
| **destination** | **string**| Filter transactions with postings involving given account at destination (regular expression placed between ^ and $). | [optional] |
| **start_time** | **\DateTime**| Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). | [optional] |
| **start_time2** | **\DateTime**| Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). Deprecated, please use &#x60;startTime&#x60; instead. | [optional] |
| **end_time** | **\DateTime**| Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). | [optional] |
| **end_time2** | **\DateTime**| Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). Deprecated, please use &#x60;endTime&#x60; instead. | [optional] |
| **metadata** | [**object**](../Model/.md)| Filter transactions by metadata key value pairs. Nested objects can be used as seen in the example below. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransaction()`

```php
createTransaction($ledger, $post_transaction, $preview): \Numary\Ledger\Model\TransactionsResponse
```

Create a new transaction to a ledger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$post_transaction = new \Numary\Ledger\Model\PostTransaction(); // \Numary\Ledger\Model\PostTransaction | The request body must contain at least one of the following objects:   - `postings`: suitable for simple transactions   - `script`: enabling more complex transactions with Numscript
$preview = true; // bool | Set the preview mode. Preview mode doesn't add the logs to the database or publish a message to the message broker.

try {
    $result = $apiInstance->createTransaction($ledger, $post_transaction, $preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **post_transaction** | [**\Numary\Ledger\Model\PostTransaction**](../Model/PostTransaction.md)| The request body must contain at least one of the following objects:   - &#x60;postings&#x60;: suitable for simple transactions   - &#x60;script&#x60;: enabling more complex transactions with Numscript | |
| **preview** | **bool**| Set the preview mode. Preview mode doesn&#39;t add the logs to the database or publish a message to the message broker. | [optional] |

### Return type

[**\Numary\Ledger\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransactions()`

```php
createTransactions($ledger, $transactions): \Numary\Ledger\Model\TransactionsResponse
```

Create a new batch of transactions to a ledger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$transactions = new \Numary\Ledger\Model\Transactions(); // \Numary\Ledger\Model\Transactions

try {
    $result = $apiInstance->createTransactions($ledger, $transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->createTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **transactions** | [**\Numary\Ledger\Model\Transactions**](../Model/Transactions.md)|  | |

### Return type

[**\Numary\Ledger\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($ledger, $address): \Numary\Ledger\Model\AccountResponse
```

Get account by its address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:001; // string | Exact address of the account. It must match the following regular expressions pattern: ``` ^\\w+(:\\w+)*$ ```

try {
    $result = $apiInstance->getAccount($ledger, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Exact address of the account. It must match the following regular expressions pattern: &#x60;&#x60;&#x60; ^\\w+(:\\w+)*$ &#x60;&#x60;&#x60; | |

### Return type

[**\Numary\Ledger\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalances()`

```php
getBalances($ledger, $address, $after, $cursor, $pagination_token): \Numary\Ledger\Model\BalancesCursorResponse
```

Get the balances from a ledger's account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:001; // string | Filter balances involving given account, either as source or destination.
$after = users:003; // string | Pagination cursor, will return accounts after given address, in descending order.
$cursor = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set.
$pagination_token = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. Deprecated, please use `cursor` instead.

try {
    $result = $apiInstance->getBalances($ledger, $address, $after, $cursor, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Filter balances involving given account, either as source or destination. | [optional] |
| **after** | **string**| Pagination cursor, will return accounts after given address, in descending order. | [optional] |
| **cursor** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. | [optional] |
| **pagination_token** | **string**| Parameter used in pagination requests. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. Deprecated, please use &#x60;cursor&#x60; instead. | [optional] |

### Return type

[**\Numary\Ledger\Model\BalancesCursorResponse**](../Model/BalancesCursorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalancesAggregated()`

```php
getBalancesAggregated($ledger, $address): \Numary\Ledger\Model\AggregateBalancesResponse
```

Get the aggregated balances from selected accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:001; // string | Filter balances involving given account, either as source or destination.

try {
    $result = $apiInstance->getBalancesAggregated($ledger, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getBalancesAggregated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Filter balances involving given account, either as source or destination. | [optional] |

### Return type

[**\Numary\Ledger\Model\AggregateBalancesResponse**](../Model/AggregateBalancesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInfo()`

```php
getInfo(): \Numary\Ledger\Model\ConfigInfoResponse
```

Show server information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Numary\Ledger\Model\ConfigInfoResponse**](../Model/ConfigInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerInfo()`

```php
getLedgerInfo($ledger): \Numary\Ledger\Model\LedgerInfoResponse
```

Get information about a ledger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.

try {
    $result = $apiInstance->getLedgerInfo($ledger);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getLedgerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |

### Return type

[**\Numary\Ledger\Model\LedgerInfoResponse**](../Model/LedgerInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMapping()`

```php
getMapping($ledger): \Numary\Ledger\Model\MappingResponse
```

Get the mapping of a ledger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.

try {
    $result = $apiInstance->getMapping($ledger);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |

### Return type

[**\Numary\Ledger\Model\MappingResponse**](../Model/MappingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransaction()`

```php
getTransaction($ledger, $txid): \Numary\Ledger\Model\TransactionResponse
```

Get transaction from a ledger by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$txid = 1234; // int | Transaction ID.

try {
    $result = $apiInstance->getTransaction($ledger, $txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **txid** | **int**| Transaction ID. | |

### Return type

[**\Numary\Ledger\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccounts()`

```php
listAccounts($ledger, $page_size, $page_size2, $after, $address, $metadata, $balance, $balance_operator, $balance_operator2, $cursor, $pagination_token): \Numary\Ledger\Model\AccountsCursorResponse
```

List accounts from a ledger

List accounts from a ledger, sorted by address in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$page_size = 100; // int | The maximum number of results to return per page.
$page_size2 = 100; // int | The maximum number of results to return per page. Deprecated, please use `pageSize` instead.
$after = users:003; // string | Pagination cursor, will return accounts after given address, in descending order.
$address = users:.+; // string | Filter accounts by address pattern (regular expression placed between ^ and $).
$metadata = metadata[key]=value1&metadata[a.nested.key]=value2; // object | Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below.
$balance = 2400; // int | Filter accounts by their balance (default operator is gte)
$balance_operator = gte; // string | Operator used for the filtering of balances can be greater than/equal, less than/equal, greater than, less than, equal or not.
$balance_operator2 = gte; // string | Operator used for the filtering of balances can be greater than/equal, less than/equal, greater than, less than, equal or not. Deprecated, please use `balanceOperator` instead.
$cursor = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set.
$pagination_token = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use `cursor` instead.

try {
    $result = $apiInstance->listAccounts($ledger, $page_size, $page_size2, $after, $address, $metadata, $balance, $balance_operator, $balance_operator2, $cursor, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->listAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **page_size** | **int**| The maximum number of results to return per page. | [optional] [default to 15] |
| **page_size2** | **int**| The maximum number of results to return per page. Deprecated, please use &#x60;pageSize&#x60; instead. | [optional] [default to 15] |
| **after** | **string**| Pagination cursor, will return accounts after given address, in descending order. | [optional] |
| **address** | **string**| Filter accounts by address pattern (regular expression placed between ^ and $). | [optional] |
| **metadata** | [**object**](../Model/.md)| Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below. | [optional] |
| **balance** | **int**| Filter accounts by their balance (default operator is gte) | [optional] |
| **balance_operator** | **string**| Operator used for the filtering of balances can be greater than/equal, less than/equal, greater than, less than, equal or not. | [optional] |
| **balance_operator2** | **string**| Operator used for the filtering of balances can be greater than/equal, less than/equal, greater than, less than, equal or not. Deprecated, please use &#x60;balanceOperator&#x60; instead. | [optional] |
| **cursor** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. | [optional] |
| **pagination_token** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use &#x60;cursor&#x60; instead. | [optional] |

### Return type

[**\Numary\Ledger\Model\AccountsCursorResponse**](../Model/AccountsCursorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogs()`

```php
listLogs($ledger, $page_size, $page_size2, $after, $start_time, $start_time2, $end_time, $end_time2, $cursor, $pagination_token): \Numary\Ledger\Model\LogsCursorResponse
```

List the logs from a ledger

List the logs from a ledger, sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$page_size = 100; // int | The maximum number of results to return per page.
$page_size2 = 100; // int | The maximum number of results to return per page. Deprecated, please use `pageSize` instead.
$after = 1234; // string | Pagination cursor, will return the logs after a given ID. (in descending order).
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \"2023-01-02T15:04:01Z\" includes the first second of 4th minute).
$start_time2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \"2023-01-02T15:04:01Z\" includes the first second of 4th minute). Deprecated, please use `startTime` instead.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \"2023-01-02T15:04:01Z\" excludes the first second of 4th minute).
$end_time2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \"2023-01-02T15:04:01Z\" excludes the first second of 4th minute). Deprecated, please use `endTime` instead.
$cursor = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set.
$pagination_token = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use `cursor` instead.

try {
    $result = $apiInstance->listLogs($ledger, $page_size, $page_size2, $after, $start_time, $start_time2, $end_time, $end_time2, $cursor, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->listLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **page_size** | **int**| The maximum number of results to return per page. | [optional] [default to 15] |
| **page_size2** | **int**| The maximum number of results to return per page. Deprecated, please use &#x60;pageSize&#x60; instead. | [optional] [default to 15] |
| **after** | **string**| Pagination cursor, will return the logs after a given ID. (in descending order). | [optional] |
| **start_time** | **\DateTime**| Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). | [optional] |
| **start_time2** | **\DateTime**| Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). Deprecated, please use &#x60;startTime&#x60; instead. | [optional] |
| **end_time** | **\DateTime**| Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). | [optional] |
| **end_time2** | **\DateTime**| Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). Deprecated, please use &#x60;endTime&#x60; instead. | [optional] |
| **cursor** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. | [optional] |
| **pagination_token** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use &#x60;cursor&#x60; instead. | [optional] |

### Return type

[**\Numary\Ledger\Model\LogsCursorResponse**](../Model/LogsCursorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactions()`

```php
listTransactions($ledger, $page_size, $page_size2, $after, $reference, $account, $source, $destination, $start_time, $start_time2, $end_time, $end_time2, $cursor, $pagination_token, $metadata): \Numary\Ledger\Model\TransactionsCursorResponse
```

List transactions from a ledger

List transactions from a ledger, sorted by txid in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$page_size = 100; // int | The maximum number of results to return per page.
$page_size2 = 100; // int | The maximum number of results to return per page. Deprecated, please use `pageSize` instead.
$after = 1234; // string | Pagination cursor, will return transactions after given txid (in descending order).
$reference = ref:001; // string | Find transactions by reference field.
$account = users:001; // string | Filter transactions with postings involving given account, either as source or destination (regular expression placed between ^ and $).
$source = users:001; // string | Filter transactions with postings involving given account at source (regular expression placed between ^ and $).
$destination = users:001; // string | Filter transactions with postings involving given account at destination (regular expression placed between ^ and $).
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \"2023-01-02T15:04:01Z\" includes the first second of 4th minute).
$start_time2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \"2023-01-02T15:04:01Z\" includes the first second of 4th minute). Deprecated, please use `startTime` instead.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \"2023-01-02T15:04:01Z\" excludes the first second of 4th minute).
$end_time2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \"2023-01-02T15:04:01Z\" excludes the first second of 4th minute). Deprecated, please use `endTime` instead.
$cursor = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set.
$pagination_token = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use `cursor` instead.
$metadata = metadata[key]=value1&metadata[a.nested.key]=value2; // object | Filter transactions by metadata key value pairs. Nested objects can be used as seen in the example below.

try {
    $result = $apiInstance->listTransactions($ledger, $page_size, $page_size2, $after, $reference, $account, $source, $destination, $start_time, $start_time2, $end_time, $end_time2, $cursor, $pagination_token, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **page_size** | **int**| The maximum number of results to return per page. | [optional] [default to 15] |
| **page_size2** | **int**| The maximum number of results to return per page. Deprecated, please use &#x60;pageSize&#x60; instead. | [optional] [default to 15] |
| **after** | **string**| Pagination cursor, will return transactions after given txid (in descending order). | [optional] |
| **reference** | **string**| Find transactions by reference field. | [optional] |
| **account** | **string**| Filter transactions with postings involving given account, either as source or destination (regular expression placed between ^ and $). | [optional] |
| **source** | **string**| Filter transactions with postings involving given account at source (regular expression placed between ^ and $). | [optional] |
| **destination** | **string**| Filter transactions with postings involving given account at destination (regular expression placed between ^ and $). | [optional] |
| **start_time** | **\DateTime**| Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). | [optional] |
| **start_time2** | **\DateTime**| Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). Deprecated, please use &#x60;startTime&#x60; instead. | [optional] |
| **end_time** | **\DateTime**| Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). | [optional] |
| **end_time2** | **\DateTime**| Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). Deprecated, please use &#x60;endTime&#x60; instead. | [optional] |
| **cursor** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. | [optional] |
| **pagination_token** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use &#x60;cursor&#x60; instead. | [optional] |
| **metadata** | [**object**](../Model/.md)| Filter transactions by metadata key value pairs. Nested objects can be used as seen in the example below. | [optional] |

### Return type

[**\Numary\Ledger\Model\TransactionsCursorResponse**](../Model/TransactionsCursorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readStats()`

```php
readStats($ledger): \Numary\Ledger\Model\StatsResponse
```

Get statistics from a ledger

Get statistics from a ledger. (aggregate metrics on accounts and transactions)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | name of the ledger

try {
    $result = $apiInstance->readStats($ledger);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->readStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| name of the ledger | |

### Return type

[**\Numary\Ledger\Model\StatsResponse**](../Model/StatsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revertTransaction()`

```php
revertTransaction($ledger, $txid, $disable_checks): \Numary\Ledger\Model\TransactionResponse
```

Revert a ledger transaction by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$txid = 1234; // int | Transaction ID.
$disable_checks = True; // bool | Allow to disable balances checks

try {
    $result = $apiInstance->revertTransaction($ledger, $txid, $disable_checks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->revertTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **txid** | **int**| Transaction ID. | |
| **disable_checks** | **bool**| Allow to disable balances checks | [optional] |

### Return type

[**\Numary\Ledger\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runScript()`

```php
runScript($ledger, $script, $preview): \Numary\Ledger\Model\ScriptResponse
```

Execute a Numscript

This route is deprecated, and has been merged into `POST /{ledger}/transactions`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$script = new \Numary\Ledger\Model\Script(); // \Numary\Ledger\Model\Script
$preview = true; // bool | Set the preview mode. Preview mode doesn't add the logs to the database or publish a message to the message broker.

try {
    $result = $apiInstance->runScript($ledger, $script, $preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->runScript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **script** | [**\Numary\Ledger\Model\Script**](../Model/Script.md)|  | |
| **preview** | **bool**| Set the preview mode. Preview mode doesn&#39;t add the logs to the database or publish a message to the message broker. | [optional] |

### Return type

[**\Numary\Ledger\Model\ScriptResponse**](../Model/ScriptResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMapping()`

```php
updateMapping($ledger, $mapping): \Numary\Ledger\Model\MappingResponse
```

Update the mapping of a ledger

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$mapping = new \Numary\Ledger\Model\Mapping(); // \Numary\Ledger\Model\Mapping

try {
    $result = $apiInstance->updateMapping($ledger, $mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->updateMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **mapping** | [**\Numary\Ledger\Model\Mapping**](../Model/Mapping.md)|  | |

### Return type

[**\Numary\Ledger\Model\MappingResponse**](../Model/MappingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
