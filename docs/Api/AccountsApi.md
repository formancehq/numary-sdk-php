# Numary\Ledger\AccountsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMetadataToAccount()**](AccountsApi.md#addMetadataToAccount) | **POST** /{ledger}/accounts/{address}/metadata | Add metadata to an account.
[**countAccounts()**](AccountsApi.md#countAccounts) | **HEAD** /{ledger}/accounts | Count the accounts from a ledger.
[**getAccount()**](AccountsApi.md#getAccount) | **GET** /{ledger}/accounts/{address} | Get account by its address.
[**listAccounts()**](AccountsApi.md#listAccounts) | **GET** /{ledger}/accounts | List accounts from a ledger.


## `addMetadataToAccount()`

```php
addMetadataToAccount($ledger, $address, $request_body)
```

Add metadata to an account.

### Example

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
$address = users:001; // string | Exact address of the account.
$request_body = NULL; // array<string,mixed> | metadata

try {
    $apiInstance->addMetadataToAccount($ledger, $address, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->addMetadataToAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| Name of the ledger. |
 **address** | **string**| Exact address of the account. |
 **request_body** | [**array<string,mixed>**](../Model/mixed.md)| metadata |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countAccounts()`

```php
countAccounts($ledger, $address, $metadata)
```

Count the accounts from a ledger.

### Example

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
$address = users:.+; // string | Filter accounts by address pattern (regular expression placed between ^ and $).
$metadata = metadata[key]=value1&metadata[a.nested.key]=value2; // object | Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below.

try {
    $apiInstance->countAccounts($ledger, $address, $metadata);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->countAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| Name of the ledger. |
 **address** | **string**| Filter accounts by address pattern (regular expression placed between ^ and $). | [optional]
 **metadata** | [**object**](../Model/.md)| Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($ledger, $address): \Numary\Ledger\Model\GetAccount200Response
```

Get account by its address.

### Example

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
$address = users:001; // string | Exact address of the account.

try {
    $result = $apiInstance->getAccount($ledger, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| Name of the ledger. |
 **address** | **string**| Exact address of the account. |

### Return type

[**\Numary\Ledger\Model\GetAccount200Response**](../Model/GetAccount200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccounts()`

```php
listAccounts($ledger, $after, $address, $metadata): \Numary\Ledger\Model\ListAccounts200Response
```

List accounts from a ledger.

List accounts from a ledger, sorted by address in descending order.

### Example

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
$after = users:003; // string | Pagination cursor, will return accounts after given address, in descending order.
$address = users:.+; // string | Filter accounts by address pattern (regular expression placed between ^ and $).
$metadata = metadata[key]=value1&metadata[a.nested.key]=value2; // object | Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below.

try {
    $result = $apiInstance->listAccounts($ledger, $after, $address, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| Name of the ledger. |
 **after** | **string**| Pagination cursor, will return accounts after given address, in descending order. | [optional]
 **address** | **string**| Filter accounts by address pattern (regular expression placed between ^ and $). | [optional]
 **metadata** | [**object**](../Model/.md)| Filter accounts by metadata key value pairs. Nested objects can be used as seen in the example below. | [optional]

### Return type

[**\Numary\Ledger\Model\ListAccounts200Response**](../Model/ListAccounts200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
