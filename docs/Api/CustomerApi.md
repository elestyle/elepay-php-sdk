# OpenAPI\Client\CustomerApi

All URIs are relative to *https://api.elepay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomer**](CustomerApi.md#createCustomer) | **POST** /customers | Create customer
[**createSource**](CustomerApi.md#createSource) | **POST** /customers/{customerId}/sources | Create source
[**deleteCustomer**](CustomerApi.md#deleteCustomer) | **DELETE** /customers/{customerId} | Delete customer
[**deleteSource**](CustomerApi.md#deleteSource) | **DELETE** /customers/{customerId}/sources/{sourceId} | Delete source
[**listCustomers**](CustomerApi.md#listCustomers) | **GET** /customers | List customers
[**listSources**](CustomerApi.md#listSources) | **GET** /customers/{customerId}/sources | List sources by customer ID
[**retrieveCustomer**](CustomerApi.md#retrieveCustomer) | **GET** /customers/{customerId} | Retrieve customer
[**retrieveSource**](CustomerApi.md#retrieveSource) | **GET** /customers/{customerId}/sources/{sourceId} | Retrieve source



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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
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
    echo 'Exception when calling CustomerApi->createCustomer: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
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
    echo 'Exception when calling CustomerApi->createSource: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Customer ID

try {
    $apiInstance->deleteCustomer($customerId);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
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
    echo 'Exception when calling CustomerApi->deleteSource: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
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
    echo 'Exception when calling CustomerApi->listCustomers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
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
    echo 'Exception when calling CustomerApi->listSources: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
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
    echo 'Exception when calling CustomerApi->retrieveCustomer: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
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
    echo 'Exception when calling CustomerApi->retrieveSource: ', $e->getMessage(), PHP_EOL;
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

