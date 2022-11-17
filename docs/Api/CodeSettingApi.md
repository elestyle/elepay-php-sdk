# Elepay\CodeSettingApi

All URIs are relative to https://api.elepay.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listCodePaymentMethods()**](CodeSettingApi.md#listCodePaymentMethods) | **GET** /code-setting/payment-methods | List all enabled EasyQR payment methods |


## `listCodePaymentMethods()`

```php
listCodePaymentMethods(): \Elepay\Model\CodePaymentMethodResponse
```

List all enabled EasyQR payment methods

EasyQR利用できる決済方法を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\CodeSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCodePaymentMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeSettingApi->listCodePaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elepay\Model\CodePaymentMethodResponse**](../Model/CodePaymentMethodResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
