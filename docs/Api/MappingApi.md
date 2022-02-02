# Numary\Ledger\MappingApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMapping()**](MappingApi.md#getMapping) | **GET** /{ledger}/mapping | Get mapping
[**updateMapping()**](MappingApi.md#updateMapping) | **PUT** /{ledger}/mapping | Put mapping


## `getMapping()`

```php
getMapping($ledger): \Numary\Ledger\Model\MappingResponse
```

Get mapping

Get ledger mapping

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


$apiInstance = new Numary\Ledger\Api\MappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = 'ledger_example'; // string | ledger

try {
    $result = $apiInstance->getMapping($ledger);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->getMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| ledger |

### Return type

[**\Numary\Ledger\Model\MappingResponse**](../Model/MappingResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [cloudToken](../../README.md#cloudToken)

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

Put mapping

Update ledger mapping

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


$apiInstance = new Numary\Ledger\Api\MappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger = 'ledger_example'; // string | ledger
$mapping = new \Numary\Ledger\Model\Mapping(); // \Numary\Ledger\Model\Mapping | mapping

try {
    $result = $apiInstance->updateMapping($ledger, $mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->updateMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| ledger |
 **mapping** | [**\Numary\Ledger\Model\Mapping**](../Model/Mapping.md)| mapping |

### Return type

[**\Numary\Ledger\Model\MappingResponse**](../Model/MappingResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [cloudToken](../../README.md#cloudToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
