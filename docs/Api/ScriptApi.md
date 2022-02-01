# Numary\Ledger\ScriptApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**runScript()**](ScriptApi.md#runScript) | **POST** /{ledger}/script | Execute Numscript


## `runScript()`

```php
runScript($ledger, $script): \Numary\Ledger\Model\ScriptResult
```

Execute Numscript

Execute a Numscript and create the transaction if any

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Numary\Ledger\Api\ScriptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledger = 'ledger_example'; // string | ledger
$script = new \Numary\Ledger\Model\Script(); // \Numary\Ledger\Model\Script | script

try {
    $result = $apiInstance->runScript($ledger, $script);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptApi->runScript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger** | **string**| ledger |
 **script** | [**\Numary\Ledger\Model\Script**](../Model/Script.md)| script |

### Return type

[**\Numary\Ledger\Model\ScriptResult**](../Model/ScriptResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
