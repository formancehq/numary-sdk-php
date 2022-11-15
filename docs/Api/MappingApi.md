# Numary\Ledger\MappingApi

All URIs are relative to https://.o.numary.cloud/ledger, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMapping()**](MappingApi.md#getMapping) | **GET** /{ledger}/mapping | Get the mapping of a ledger. |
| [**updateMapping()**](MappingApi.md#updateMapping) | **PUT** /{ledger}/mapping | Update the mapping of a ledger. |


## `getMapping()`

```php
getMapping($ledger): \Numary\Ledger\Model\MappingResponse
```

Get the mapping of a ledger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Numary\Ledger\Api\MappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = ledger001; // string | Name of the ledger.

try {
    $result = $apiInstance->getMapping($ledger);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->getMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledger** | **string**| Name of the ledger. | |

### Return type

[**\Numary\Ledger\Model\MappingResponse**](../Model/MappingResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMapping()`

```php
updateMapping($ledger, $mapping): \Numary\Ledger\Model\MappingResponse
```

Update the mapping of a ledger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Numary\Ledger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Numary\Ledger\Api\MappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = ledger001; // string | Name of the ledger.
$mapping = new \Numary\Ledger\Model\Mapping(); // \Numary\Ledger\Model\Mapping

try {
    $result = $apiInstance->updateMapping($ledger, $mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->updateMapping: ', $e->getMessage(), PHP_EOL;
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

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
