# Numary\Ledger\ScriptApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**runScript()**](ScriptApi.md#runScript) | **POST** /{ledger}/script | Execute a Numscript |


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



$apiInstance = new Numary\Ledger\Api\ScriptApi(
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
    echo 'Exception when calling ScriptApi->runScript: ', $e->getMessage(), PHP_EOL;
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
