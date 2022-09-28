# Numary\Ledger\BalancesApi

All URIs are relative to https://.o.numary.cloud/ledger, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBalances()**](BalancesApi.md#getBalances) | **GET** /{ledger}/balances | Get the balances from a ledger&#39;s account |
| [**getBalancesAggregated()**](BalancesApi.md#getBalancesAggregated) | **GET** /{ledger}/aggregate/balances | Get the aggregated balances from selected accounts |


## `getBalances()`

```php
getBalances($ledger, $address, $after, $pagination_token): \Numary\Ledger\Model\GetBalances200Response
```

Get the balances from a ledger's account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Numary\Ledger\Api\BalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:001; // string | Filter balances involving given account, either as source or destination.
$after = users:003; // string | Pagination cursor, will return accounts after given address, in descending order.
$pagination_token = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests.  Set to the value of next for the next page of results.  Set to the value of previous for the previous page of results.

try {
    $result = $apiInstance->getBalances($ledger, $address, $after, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalancesApi->getBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Filter balances involving given account, either as source or destination. | [optional] |
| **after** | **string**| Pagination cursor, will return accounts after given address, in descending order. | [optional] |
| **pagination_token** | **string**| Parameter used in pagination requests.  Set to the value of next for the next page of results.  Set to the value of previous for the previous page of results. | [optional] |

### Return type

[**\Numary\Ledger\Model\GetBalances200Response**](../Model/GetBalances200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalancesAggregated()`

```php
getBalancesAggregated($ledger, $address): \Numary\Ledger\Model\GetBalancesAggregated200Response
```

Get the aggregated balances from selected accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Numary\Ledger\Api\BalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = ledger001; // string | Name of the ledger.
$address = users:001; // string | Filter balances involving given account, either as source or destination.

try {
    $result = $apiInstance->getBalancesAggregated($ledger, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalancesApi->getBalancesAggregated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **address** | **string**| Filter balances involving given account, either as source or destination. | [optional] |

### Return type

[**\Numary\Ledger\Model\GetBalancesAggregated200Response**](../Model/GetBalancesAggregated200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
