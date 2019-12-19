# OpenAPI\Client\ClientApi

All URIs are relative to *https://api.elepay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCharge**](ClientApi.md#createCharge) | **POST** /charges | Create charge
[**createCustomer**](ClientApi.md#createCustomer) | **POST** /customers | Create customer
[**createRefund**](ClientApi.md#createRefund) | **POST** /charges/{id}/refunds | Create refund
[**createSource**](ClientApi.md#createSource) | **POST** /customers/{customerId}/sources | Create source
[**deleteCustomer**](ClientApi.md#deleteCustomer) | **DELETE** /customers/{customerId} | Delete customer
[**deleteSource**](ClientApi.md#deleteSource) | **DELETE** /customers/{customerId}/sources/{sourceId} | Delete source
[**listCharges**](ClientApi.md#listCharges) | **GET** /charges | List charges
[**listChargesRefunds**](ClientApi.md#listChargesRefunds) | **GET** /charges/{id}/refunds | List refunds
[**listCustomers**](ClientApi.md#listCustomers) | **GET** /customers | List customers
[**listSources**](ClientApi.md#listSources) | **GET** /customers/{customerId}/sources | List sources by customer ID
[**retrieveCharge**](ClientApi.md#retrieveCharge) | **GET** /charges/{id} | Retrieve charge
[**retrieveChargeRefund**](ClientApi.md#retrieveChargeRefund) | **GET** /charges/{id}/refunds/{refundId} | Retrieve refund
[**retrieveCustomer**](ClientApi.md#retrieveCustomer) | **GET** /customers/{customerId} | Retrieve customer
[**retrieveSource**](ClientApi.md#retrieveSource) | **GET** /customers/{customerId}/sources/{sourceId} | Retrieve source



## createCharge

> \OpenAPI\Client\Model\ChargeDto createCharge($chargeReq)

Create charge

決済処理を行います。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chargeReq = new \OpenAPI\Client\Model\ChargeReq(); // \OpenAPI\Client\Model\ChargeReq | 支払リクエスト

try {
    $result = $apiInstance->createCharge($chargeReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->createCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chargeReq** | [**\OpenAPI\Client\Model\ChargeReq**](../Model/ChargeReq.md)| 支払リクエスト |

### Return type

[**\OpenAPI\Client\Model\ChargeDto**](../Model/ChargeDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCustomer

> \OpenAPI\Client\Model\CustomerDto createCustomer($customerReq)

Create customer

カスタマを作成します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerReq = new \OpenAPI\Client\Model\CustomerReq(); // \OpenAPI\Client\Model\CustomerReq | カスタマリクエスト

try {
    $result = $apiInstance->createCustomer($customerReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerReq** | [**\OpenAPI\Client\Model\CustomerReq**](../Model/CustomerReq.md)| カスタマリクエスト |

### Return type

[**\OpenAPI\Client\Model\CustomerDto**](../Model/CustomerDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createRefund

> \OpenAPI\Client\Model\RefundDto createRefund($id, $refundReq)

Create refund

決済の全額あるいは一部の返金処理を行います。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Charge ID
$refundReq = new \OpenAPI\Client\Model\RefundReq(); // \OpenAPI\Client\Model\RefundReq | 返金の詳細情報

try {
    $result = $apiInstance->createRefund($id, $refundReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |
 **refundReq** | [**\OpenAPI\Client\Model\RefundReq**](../Model/RefundReq.md)| 返金の詳細情報 |

### Return type

[**\OpenAPI\Client\Model\RefundDto**](../Model/RefundDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSource

> \OpenAPI\Client\Model\SourceDto createSource($customerId, $sourceReq)

Create source

カスタマソースを作成します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Customer ID
$sourceReq = new \OpenAPI\Client\Model\SourceReq(); // \OpenAPI\Client\Model\SourceReq | カスタマソースリクエスト

try {
    $result = $apiInstance->createSource($customerId, $sourceReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->createSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Customer ID |
 **sourceReq** | [**\OpenAPI\Client\Model\SourceReq**](../Model/SourceReq.md)| カスタマソースリクエスト |

### Return type

[**\OpenAPI\Client\Model\SourceDto**](../Model/SourceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomer

> deleteCustomer($customerId)

Delete customer

カスタマを削除します

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Customer ID

try {
    $apiInstance->deleteCustomer($customerId);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Customer ID |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSource

> deleteSource($customerId, $sourceId)

Delete source

カスタマソースを削除します

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Customer ID
$sourceId = 'sourceId_example'; // string | Source ID

try {
    $apiInstance->deleteSource($customerId, $sourceId);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->deleteSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Customer ID |
 **sourceId** | **string**| Source ID |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCharges

> \OpenAPI\Client\Model\ChargesResponse listCharges($paymentMethod, $from, $to, $dateField, $status, $limit, $offset, $sort, $order)

List charges

決済に関する情報を一覧で取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentMethod = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PaymentMethodType()); // \OpenAPI\Client\Model\PaymentMethodType[] | 決済方法(複数の指定が可能です)
$from = 56; // int | 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。
$to = 56; // int | 終了時間（UTC）。指定した時間以前に作成されたデータを取得します
$dateField = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ChargeDateTimeType(); // \OpenAPI\Client\Model\ChargeDateTimeType | 開始時間と終了時間の項目を指定します。 - paid_time 払う時間 - create_time 決済新規時間
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ChargeStatusType(); // \OpenAPI\Client\Model\ChargeStatusType | 支払状況
$limit = 20; // int | 最大件数
$offset = 0; // int | 検索開始位置
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ChargeDateTimeType(); // \OpenAPI\Client\Model\ChargeDateTimeType | ソート項目 - paid_time 払う時間 - create_time 決済新規時間
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrderType(); // \OpenAPI\Client\Model\SortOrderType | ソート順 - desc 降順 - asc 昇順

try {
    $result = $apiInstance->listCharges($paymentMethod, $from, $to, $dateField, $status, $limit, $offset, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->listCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentMethod** | [**\OpenAPI\Client\Model\PaymentMethodType[]**](../Model/\OpenAPI\Client\Model\PaymentMethodType.md)| 決済方法(複数の指定が可能です) | [optional]
 **from** | **int**| 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 | [optional]
 **to** | **int**| 終了時間（UTC）。指定した時間以前に作成されたデータを取得します | [optional]
 **dateField** | [**\OpenAPI\Client\Model\ChargeDateTimeType**](../Model/.md)| 開始時間と終了時間の項目を指定します。 - paid_time 払う時間 - create_time 決済新規時間 | [optional]
 **status** | [**\OpenAPI\Client\Model\ChargeStatusType**](../Model/.md)| 支払状況 | [optional]
 **limit** | **int**| 最大件数 | [optional] [default to 20]
 **offset** | **int**| 検索開始位置 | [optional] [default to 0]
 **sort** | [**\OpenAPI\Client\Model\ChargeDateTimeType**](../Model/.md)| ソート項目 - paid_time 払う時間 - create_time 決済新規時間 | [optional]
 **order** | [**\OpenAPI\Client\Model\SortOrderType**](../Model/.md)| ソート順 - desc 降順 - asc 昇順 | [optional]

### Return type

[**\OpenAPI\Client\Model\ChargesResponse**](../Model/ChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listChargesRefunds

> \OpenAPI\Client\Model\RefundsResponse listChargesRefunds($id)

List refunds

返金に関する情報を一覧で取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
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
    echo 'Exception when calling ClientApi->listChargesRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |

### Return type

[**\OpenAPI\Client\Model\RefundsResponse**](../Model/RefundsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCustomers

> \OpenAPI\Client\Model\CustomerResponse listCustomers($limit, $offset)

List customers

カスタマ情報を一覧で取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | 最大件数
$offset = 0; // int | 検索開始位置

try {
    $result = $apiInstance->listCustomers($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| 最大件数 | [optional] [default to 20]
 **offset** | **int**| 検索開始位置 | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSources

> \OpenAPI\Client\Model\SourceResponse listSources($customerId, $paymentMethod)

List sources by customer ID

カスタマソース情報を一覧で取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Customer ID
$paymentMethod = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PaymentMethodType(); // \OpenAPI\Client\Model\PaymentMethodType | 決済方法

try {
    $result = $apiInstance->listSources($customerId, $paymentMethod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->listSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Customer ID |
 **paymentMethod** | [**\OpenAPI\Client\Model\PaymentMethodType**](../Model/.md)| 決済方法 | [optional]

### Return type

[**\OpenAPI\Client\Model\SourceResponse**](../Model/SourceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveCharge

> \OpenAPI\Client\Model\ChargeDto retrieveCharge($id)

Retrieve charge

決済に関する詳細情報を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
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
    echo 'Exception when calling ClientApi->retrieveCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |

### Return type

[**\OpenAPI\Client\Model\ChargeDto**](../Model/ChargeDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveChargeRefund

> \OpenAPI\Client\Model\RefundDto retrieveChargeRefund($id, $refundId)

Retrieve refund

返金に関する詳細情報を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
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
    echo 'Exception when calling ClientApi->retrieveChargeRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |
 **refundId** | **string**| Refund ID |

### Return type

[**\OpenAPI\Client\Model\RefundDto**](../Model/RefundDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveCustomer

> \OpenAPI\Client\Model\CustomerDto retrieveCustomer($customerId)

Retrieve customer

カスタマ情報を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Customer ID

try {
    $result = $apiInstance->retrieveCustomer($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->retrieveCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Customer ID |

### Return type

[**\OpenAPI\Client\Model\CustomerDto**](../Model/CustomerDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveSource

> \OpenAPI\Client\Model\SourceDto retrieveSource($customerId, $sourceId)

Retrieve source

カスタマ情報を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Customer ID
$sourceId = 'sourceId_example'; // string | Source ID

try {
    $result = $apiInstance->retrieveSource($customerId, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->retrieveSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Customer ID |
 **sourceId** | **string**| Source ID |

### Return type

[**\OpenAPI\Client\Model\SourceDto**](../Model/SourceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

