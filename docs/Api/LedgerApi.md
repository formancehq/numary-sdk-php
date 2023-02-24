# Numary\Ledger\LedgerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLedgerInfo()**](LedgerApi.md#getLedgerInfo) | **GET** /{ledger}/_info | Get information about a ledger |


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
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
