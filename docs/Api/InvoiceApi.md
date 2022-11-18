# Elepay\InvoiceApi

All URIs are relative to https://api.elepay.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelInvoice()**](InvoiceApi.md#cancelInvoice) | **POST** /invoices/{invoiceId}/cancel | cancel invoice
[**createInvoice()**](InvoiceApi.md#createInvoice) | **POST** /invoices | Create invoice
[**deleteInvoice()**](InvoiceApi.md#deleteInvoice) | **DELETE** /invoices/{invoiceId} | Delete invoice
[**listInvoices()**](InvoiceApi.md#listInvoices) | **GET** /invoices | List invoices
[**retrieveInvoice()**](InvoiceApi.md#retrieveInvoice) | **GET** /invoices/{invoiceId} | Retrieve invoice
[**sendInvoice()**](InvoiceApi.md#sendInvoice) | **POST** /invoices/{invoiceId}/send | send invoice
[**submitInvoice()**](InvoiceApi.md#submitInvoice) | **POST** /invoices/{invoiceId}/submit | submit invoice
[**updateInvoice()**](InvoiceApi.md#updateInvoice) | **POST** /invoices/{invoiceId} | Update invoice


## `cancelInvoice()`

```php
cancelInvoice($invoiceId): \Elepay\Model\InvoiceDto
```

cancel invoice

インボイスを中止します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceId = 'invoiceId_example'; // string | Invoice ID

try {
    $result = $apiInstance->cancelInvoice($invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceId** | **string**| Invoice ID |

### Return type

[**\Elepay\Model\InvoiceDto**](../Model/InvoiceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoice()`

```php
createInvoice($invoiceReq): \Elepay\Model\InvoiceDto
```

Create invoice

インボイスを作成します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceReq = new \Elepay\Model\InvoiceReq(); // \Elepay\Model\InvoiceReq | インボイスリクエスト

try {
    $result = $apiInstance->createInvoice($invoiceReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceReq** | [**\Elepay\Model\InvoiceReq**](../Model/InvoiceReq.md)| インボイスリクエスト |

### Return type

[**\Elepay\Model\InvoiceDto**](../Model/InvoiceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=utf-8`
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoice()`

```php
deleteInvoice($invoiceId)
```

Delete invoice

インボイスを削除します

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceId = 'invoiceId_example'; // string | Invoice ID

try {
    $apiInstance->deleteInvoice($invoiceId);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->deleteInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceId** | **string**| Invoice ID |

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

## `listInvoices()`

```php
listInvoices($keyword, $from, $to, $status, $limit, $offset): \Elepay\Model\InvoicesResponse
```

List invoices

インボイス情報を一覧で取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword = 'keyword_example'; // string | キーワード
$from = 56; // int | dateRange from
$to = 56; // int | dateRange from
$status = array(new \Elepay\Model\\Elepay\Model\InvoiceStatusType()); // \Elepay\Model\InvoiceStatusType[] | status
$limit = 20; // int | 最大件数
$offset = 0; // int | 検索開始位置

try {
    $result = $apiInstance->listInvoices($keyword, $from, $to, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword** | **string**| キーワード | [optional]
 **from** | **int**| dateRange from | [optional]
 **to** | **int**| dateRange from | [optional]
 **status** | [**\Elepay\Model\InvoiceStatusType[]**](../Model/\Elepay\Model\InvoiceStatusType.md)| status | [optional]
 **limit** | **int**| 最大件数 | [optional] [default to 20]
 **offset** | **int**| 検索開始位置 | [optional] [default to 0]

### Return type

[**\Elepay\Model\InvoicesResponse**](../Model/InvoicesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveInvoice()`

```php
retrieveInvoice($invoiceId): \Elepay\Model\InvoiceDto
```

Retrieve invoice

インボイス情報を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceId = 'invoiceId_example'; // string | Invoice ID

try {
    $result = $apiInstance->retrieveInvoice($invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->retrieveInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceId** | **string**| Invoice ID |

### Return type

[**\Elepay\Model\InvoiceDto**](../Model/InvoiceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendInvoice()`

```php
sendInvoice($invoiceId): \Elepay\Model\InvoiceDto
```

send invoice

send invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceId = 'invoiceId_example'; // string | invoice id

try {
    $result = $apiInstance->sendInvoice($invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->sendInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceId** | **string**| invoice id |

### Return type

[**\Elepay\Model\InvoiceDto**](../Model/InvoiceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitInvoice()`

```php
submitInvoice($invoiceId): \Elepay\Model\InvoiceDto
```

submit invoice

TODO。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceId = 'invoiceId_example'; // string | Invoice ID

try {
    $result = $apiInstance->submitInvoice($invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->submitInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceId** | **string**| Invoice ID |

### Return type

[**\Elepay\Model\InvoiceDto**](../Model/InvoiceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoice()`

```php
updateInvoice($invoiceId, $invoiceReq): \Elepay\Model\InvoiceDto
```

Update invoice

インボイス情報を更新します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceId = 'invoiceId_example'; // string | Invoice ID
$invoiceReq = new \Elepay\Model\InvoiceReq(); // \Elepay\Model\InvoiceReq | インボイスリクエスト

try {
    $result = $apiInstance->updateInvoice($invoiceId, $invoiceReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceId** | **string**| Invoice ID |
 **invoiceReq** | [**\Elepay\Model\InvoiceReq**](../Model/InvoiceReq.md)| インボイスリクエスト |

### Return type

[**\Elepay\Model\InvoiceDto**](../Model/InvoiceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=utf-8`
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
