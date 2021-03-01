# Elepay\SquareApi

All URIs are relative to *https://api.elepay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSquareTerminalToken**](SquareApi.md#createSquareTerminalToken) | **POST** /terminal/square/token | create square terminal token
[**listSquareLocations**](SquareApi.md#listSquareLocations) | **GET** /terminal/square/locations | list Square locations



## createSquareTerminalToken

> \Elepay\Model\TerminalTokenDto createSquareTerminalToken($terminalTokenReq)

create square terminal token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SquareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminalTokenReq = new \Elepay\Model\TerminalTokenReq(); // \Elepay\Model\TerminalTokenReq | 

try {
    $result = $apiInstance->createSquareTerminalToken($terminalTokenReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SquareApi->createSquareTerminalToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terminalTokenReq** | [**\Elepay\Model\TerminalTokenReq**](../Model/TerminalTokenReq.md)|  |

### Return type

[**\Elepay\Model\TerminalTokenDto**](../Model/TerminalTokenDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSquareLocations

> \Elepay\Model\LocationsResponse listSquareLocations()

list Square locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SquareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSquareLocations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SquareApi->listSquareLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elepay\Model\LocationsResponse**](../Model/LocationsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

