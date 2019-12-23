# Elepay\ChargeApi

All URIs are relative to *https://api.elepay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCharge**](ChargeApi.md#createCharge) | **POST** /charges | Create charge
[**listCharges**](ChargeApi.md#listCharges) | **GET** /charges | List charges
[**retrieveCharge**](ChargeApi.md#retrieveCharge) | **GET** /charges/{id} | Retrieve charge



## createCharge

> \Elepay\Model\ChargeDto createCharge($chargeReq)

Create charge

決済処理を行います。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chargeReq = new \Elepay\Model\ChargeReq(); // \Elepay\Model\ChargeReq | 支払リクエスト

try {
    $result = $apiInstance->createCharge($chargeReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->createCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chargeReq** | [**\Elepay\Model\ChargeReq**](../Model/ChargeReq.md)| 支払リクエスト |

### Return type

[**\Elepay\Model\ChargeDto**](../Model/ChargeDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCharges

> \Elepay\Model\ChargesResponse listCharges($paymentMethod, $from, $to, $dateField, $status, $limit, $offset, $sort, $order)

List charges

決済に関する情報を一覧で取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentMethod = array(new \Elepay\Model\\Elepay\Model\PaymentMethodType()); // \Elepay\Model\PaymentMethodType[] | 決済方法(複数の指定が可能です)
$from = 56; // int | 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。
$to = 56; // int | 終了時間（UTC）。指定した時間以前に作成されたデータを取得します
$dateField = new \Elepay\Model\\Elepay\Model\ChargeDateTimeType(); // \Elepay\Model\ChargeDateTimeType | 開始時間と終了時間の項目を指定します。 - paid_time 払う時間 - create_time 決済新規時間
$status = new \Elepay\Model\\Elepay\Model\ChargeStatusType(); // \Elepay\Model\ChargeStatusType | 支払状況
$limit = 20; // int | 最大件数
$offset = 0; // int | 検索開始位置
$sort = new \Elepay\Model\\Elepay\Model\ChargeDateTimeType(); // \Elepay\Model\ChargeDateTimeType | ソート項目 - paid_time 払う時間 - create_time 決済新規時間
$order = new \Elepay\Model\\Elepay\Model\SortOrderType(); // \Elepay\Model\SortOrderType | ソート順 - desc 降順 - asc 昇順

try {
    $result = $apiInstance->listCharges($paymentMethod, $from, $to, $dateField, $status, $limit, $offset, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->listCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentMethod** | [**\Elepay\Model\PaymentMethodType[]**](../Model/\Elepay\Model\PaymentMethodType.md)| 決済方法(複数の指定が可能です) | [optional]
 **from** | **int**| 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 | [optional]
 **to** | **int**| 終了時間（UTC）。指定した時間以前に作成されたデータを取得します | [optional]
 **dateField** | [**\Elepay\Model\ChargeDateTimeType**](../Model/.md)| 開始時間と終了時間の項目を指定します。 - paid_time 払う時間 - create_time 決済新規時間 | [optional]
 **status** | [**\Elepay\Model\ChargeStatusType**](../Model/.md)| 支払状況 | [optional]
 **limit** | **int**| 最大件数 | [optional] [default to 20]
 **offset** | **int**| 検索開始位置 | [optional] [default to 0]
 **sort** | [**\Elepay\Model\ChargeDateTimeType**](../Model/.md)| ソート項目 - paid_time 払う時間 - create_time 決済新規時間 | [optional]
 **order** | [**\Elepay\Model\SortOrderType**](../Model/.md)| ソート順 - desc 降順 - asc 昇順 | [optional]

### Return type

[**\Elepay\Model\ChargesResponse**](../Model/ChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveCharge

> \Elepay\Model\ChargeDto retrieveCharge($id)

Retrieve charge

決済に関する詳細情報を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Charge ID

try {
    $result = $apiInstance->retrieveCharge($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->retrieveCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |

### Return type

[**\Elepay\Model\ChargeDto**](../Model/ChargeDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

