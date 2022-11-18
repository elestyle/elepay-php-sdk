# Elepay\TerminalApi

All URIs are relative to https://api.elepay.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReader()**](TerminalApi.md#createReader) | **POST** /terminal/readers | create terminal reader
[**deleteReader()**](TerminalApi.md#deleteReader) | **DELETE** /terminal/readers/{readerId} | delete reader
[**getReader()**](TerminalApi.md#getReader) | **GET** /terminal/readers/{readerId} | get reader
[**listLocations()**](TerminalApi.md#listLocations) | **GET** /terminal/locations | list locations
[**listReaders()**](TerminalApi.md#listReaders) | **GET** /terminal/readers | list readers


## `createReader()`

```php
createReader($terminalReaderReq): \Elepay\Model\TerminalReaderDto
```

create terminal reader

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terminalReaderReq = new \Elepay\Model\TerminalReaderReq(); // \Elepay\Model\TerminalReaderReq

try {
    $result = $apiInstance->createReader($terminalReaderReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->createReader: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terminalReaderReq** | [**\Elepay\Model\TerminalReaderReq**](../Model/TerminalReaderReq.md)|  |

### Return type

[**\Elepay\Model\TerminalReaderDto**](../Model/TerminalReaderDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=utf-8`
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReader()`

```php
deleteReader($readerId)
```

delete reader

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$readerId = 'readerId_example'; // string | reader Id

try {
    $apiInstance->deleteReader($readerId);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->deleteReader: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **readerId** | **string**| reader Id |

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

## `getReader()`

```php
getReader($readerId): \Elepay\Model\TerminalReaderDto
```

get reader

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$readerId = 'readerId_example'; // string | reader Id

try {
    $result = $apiInstance->getReader($readerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->getReader: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **readerId** | **string**| reader Id |

### Return type

[**\Elepay\Model\TerminalReaderDto**](../Model/TerminalReaderDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLocations()`

```php
listLocations(): \Elepay\Model\LocationsResponse
```

list locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listLocations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->listLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elepay\Model\LocationsResponse**](../Model/LocationsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReaders()`

```php
listReaders($limit, $offset): \Elepay\Model\TerminalReadersResponse
```

list readers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\TerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | 最大件数
$offset = 0; // int | 検索開始位置

try {
    $result = $apiInstance->listReaders($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerminalApi->listReaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| 最大件数 | [optional] [default to 20]
 **offset** | **int**| 検索開始位置 | [optional] [default to 0]

### Return type

[**\Elepay\Model\TerminalReadersResponse**](../Model/TerminalReadersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
