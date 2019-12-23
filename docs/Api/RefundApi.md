# Elepay\RefundApi

All URIs are relative to *https://api.elepay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRefund**](RefundApi.md#createRefund) | **POST** /charges/{id}/refunds | Create refund
[**listChargesRefunds**](RefundApi.md#listChargesRefunds) | **GET** /charges/{id}/refunds | List refunds
[**retrieveChargeRefund**](RefundApi.md#retrieveChargeRefund) | **GET** /charges/{id}/refunds/{refundId} | Retrieve refund



## createRefund

> \Elepay\Model\RefundDto createRefund($id, $refundReq)

Create refund

決済の全額あるいは一部の返金処理を行います。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Charge ID
$refundReq = new \Elepay\Model\RefundReq(); // \Elepay\Model\RefundReq | 返金の詳細情報

try {
    $result = $apiInstance->createRefund($id, $refundReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |
 **refundReq** | [**\Elepay\Model\RefundReq**](../Model/RefundReq.md)| 返金の詳細情報 |

### Return type

[**\Elepay\Model\RefundDto**](../Model/RefundDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listChargesRefunds

> \Elepay\Model\RefundsResponse listChargesRefunds($id)

List refunds

返金に関する情報を一覧で取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Charge ID

try {
    $result = $apiInstance->listChargesRefunds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->listChargesRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |

### Return type

[**\Elepay\Model\RefundsResponse**](../Model/RefundsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveChargeRefund

> \Elepay\Model\RefundDto retrieveChargeRefund($id, $refundId)

Retrieve refund

返金に関する詳細情報を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Charge ID
$refundId = 'refundId_example'; // string | Refund ID

try {
    $result = $apiInstance->retrieveChargeRefund($id, $refundId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->retrieveChargeRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |
 **refundId** | **string**| Refund ID |

### Return type

[**\Elepay\Model\RefundDto**](../Model/RefundDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

