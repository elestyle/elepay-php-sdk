# Elepay\DisputeApi

All URIs are relative to *https://api.elepay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDisputes**](DisputeApi.md#listDisputes) | **GET** /disputes | List disputes
[**retrieveDispute**](DisputeApi.md#retrieveDispute) | **GET** /disputes/{id} | Retrieve dispute



## listDisputes

> \Elepay\Model\DisputesResponse listDisputes($chargeId, $from, $to, $dateField, $status, $limit, $offset, $sort, $order)

List disputes

TODO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chargeId = 'chargeId_example'; // string | Charge ID
$from = 56; // int | 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。
$to = 56; // int | 終了時間（UTC）。指定した時間以前に作成されたデータを取得します
$dateField = new \Elepay\Model\\Elepay\Model\DisputeDateTimeType(); // \Elepay\Model\DisputeDateTimeType | 開始時間と終了時間の項目を指定します。 - resolved_time TODO - create_time 決済新規時間
$status = new \Elepay\Model\\Elepay\Model\DisputeStatusType(); // \Elepay\Model\DisputeStatusType | TODO
$limit = 20; // int | 最大件数
$offset = 0; // int | 検索開始位置
$sort = new \Elepay\Model\\Elepay\Model\DisputeDateTimeType(); // \Elepay\Model\DisputeDateTimeType | ソート項目 - resolved_time TODO - create_time 決済新規時間
$order = new \Elepay\Model\\Elepay\Model\SortOrderType(); // \Elepay\Model\SortOrderType | ソート順 - desc 降順 - asc 昇順

try {
    $result = $apiInstance->listDisputes($chargeId, $from, $to, $dateField, $status, $limit, $offset, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->listDisputes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chargeId** | **string**| Charge ID | [optional]
 **from** | **int**| 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 | [optional]
 **to** | **int**| 終了時間（UTC）。指定した時間以前に作成されたデータを取得します | [optional]
 **dateField** | [**\Elepay\Model\DisputeDateTimeType**](../Model/.md)| 開始時間と終了時間の項目を指定します。 - resolved_time TODO - create_time 決済新規時間 | [optional]
 **status** | [**\Elepay\Model\DisputeStatusType**](../Model/.md)| TODO | [optional]
 **limit** | **int**| 最大件数 | [optional] [default to 20]
 **offset** | **int**| 検索開始位置 | [optional] [default to 0]
 **sort** | [**\Elepay\Model\DisputeDateTimeType**](../Model/.md)| ソート項目 - resolved_time TODO - create_time 決済新規時間 | [optional]
 **order** | [**\Elepay\Model\SortOrderType**](../Model/.md)| ソート順 - desc 降順 - asc 昇順 | [optional]

### Return type

[**\Elepay\Model\DisputesResponse**](../Model/DisputesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveDispute

> \Elepay\Model\DisputeDto retrieveDispute($id)

Retrieve dispute

TODO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\DisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Dispute ID

try {
    $result = $apiInstance->retrieveDispute($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputeApi->retrieveDispute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Dispute ID |

### Return type

[**\Elepay\Model\DisputeDto**](../Model/DisputeDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

