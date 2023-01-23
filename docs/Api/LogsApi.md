# Numary\Ledger\LogsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listLogs()**](LogsApi.md#listLogs) | **GET** /{ledger}/log | List the logs from a ledger. |


## `listLogs()`

```php
listLogs($ledger, $page_size, $after, $start_time, $end_time, $pagination_token): \Numary\Ledger\Model\LogsCursorResponse
```

List the logs from a ledger.

List the logs from a ledger, sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = ledger001; // string | Name of the ledger.
$page_size = 15; // int | The maximum number of results to return per page
$after = 1234; // string | Pagination cursor, will return the logs after a given ID. (in descending order).
$start_time = 'start_time_example'; // string | Filter logs that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, 12:00:01 includes the first second of the minute).
$end_time = 'end_time_example'; // string | Filter logs that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, 12:00:01 excludes the first second of the minute).
$pagination_token = aHR0cHM6Ly9nLnBhZ2UvTmVrby1SYW1lbj9zaGFyZQ==; // string | Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when the pagination token is set.

try {
    $result = $apiInstance->listLogs($ledger, $page_size, $after, $start_time, $end_time, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->listLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |
| **page_size** | **int**| The maximum number of results to return per page | [optional] [default to 15] |
| **after** | **string**| Pagination cursor, will return the logs after a given ID. (in descending order). | [optional] |
| **start_time** | **string**| Filter logs that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, 12:00:01 includes the first second of the minute). | [optional] |
| **end_time** | **string**| Filter logs that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, 12:00:01 excludes the first second of the minute). | [optional] |
| **pagination_token** | **string**| Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when the pagination token is set. | [optional] |

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
