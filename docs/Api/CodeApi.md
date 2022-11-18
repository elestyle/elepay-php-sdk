# Elepay\CodeApi

All URIs are relative to https://api.elepay.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**closeCode()**](CodeApi.md#closeCode) | **DELETE** /codes/{codeId} | Close EasyQR code
[**createCode()**](CodeApi.md#createCode) | **POST** /codes | Create EasyQR code
[**retrieveCode()**](CodeApi.md#retrieveCode) | **GET** /codes/{codeId} | Retrieve EasyQR code


## `closeCode()`

```php
closeCode($codeId)
```

Close EasyQR code

EasyQRコードを削除します

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\CodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeId = 'codeId_example'; // string | EasyQRコード

try {
    $apiInstance->closeCode($codeId);
} catch (Exception $e) {
    echo 'Exception when calling CodeApi->closeCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeId** | **string**| EasyQRコード |

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

## `createCode()`

```php
createCode($codeReq): \Elepay\Model\CodeDto
```

Create EasyQR code

EasyQRコードを作成します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\CodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeReq = new \Elepay\Model\CodeReq(); // \Elepay\Model\CodeReq | EasyQRコードリクエスト

try {
    $result = $apiInstance->createCode($codeReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeApi->createCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeReq** | [**\Elepay\Model\CodeReq**](../Model/CodeReq.md)| EasyQRコードリクエスト |

### Return type

[**\Elepay\Model\CodeDto**](../Model/CodeDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=utf-8`
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveCode()`

```php
retrieveCode($codeId): \Elepay\Model\CodeDto
```

Retrieve EasyQR code

EasyQRコードオブジェクトを取得する

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\CodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeId = 'codeId_example'; // string | EasyQRコード

try {
    $result = $apiInstance->retrieveCode($codeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeApi->retrieveCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeId** | **string**| EasyQRコード |

### Return type

[**\Elepay\Model\CodeDto**](../Model/CodeDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
