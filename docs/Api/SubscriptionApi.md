# Elepay\SubscriptionApi

All URIs are relative to https://api.elepay.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelSubscription()**](SubscriptionApi.md#cancelSubscription) | **POST** /subscriptions/{subscriptionId}/cancel | Cancel subscription
[**createSubscription()**](SubscriptionApi.md#createSubscription) | **POST** /subscriptions | Create subscription
[**listSubscriptionPeriods()**](SubscriptionApi.md#listSubscriptionPeriods) | **GET** /subscriptions/{subscriptionId}/periods | List subscription periods
[**listSubscriptions()**](SubscriptionApi.md#listSubscriptions) | **GET** /subscriptions | List subscriptions
[**resumeSubscription()**](SubscriptionApi.md#resumeSubscription) | **POST** /subscriptions/{subscriptionId}/resume | Resume subscription
[**retrieveSubscription()**](SubscriptionApi.md#retrieveSubscription) | **GET** /subscriptions/{subscriptionId} | Retrieve subscription
[**startSubscription()**](SubscriptionApi.md#startSubscription) | **POST** /subscriptions/{subscriptionId}/start | Start subscription
[**updateSubscription()**](SubscriptionApi.md#updateSubscription) | **POST** /subscriptions/{subscriptionId} | Update subscription


## `cancelSubscription()`

```php
cancelSubscription($subscriptionId): \Elepay\Model\SubscriptionDto
```

Cancel subscription

定期課金をキャンセルし、現在の周期の終了日をもって定期課金を終了させます。 キャンセルした定期課金は再スタートできません。 処理中の定期課金はキャンセルできません。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 'subscriptionId_example'; // string | Subscription ID

try {
    $result = $apiInstance->cancelSubscription($subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->cancelSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | **string**| Subscription ID |

### Return type

[**\Elepay\Model\SubscriptionDto**](../Model/SubscriptionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubscription()`

```php
createSubscription($subscriptionReq): \Elepay\Model\SubscriptionDto
```

Create subscription

定期課金を作成します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionReq = new \Elepay\Model\SubscriptionReq(); // \Elepay\Model\SubscriptionReq

try {
    $result = $apiInstance->createSubscription($subscriptionReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionReq** | [**\Elepay\Model\SubscriptionReq**](../Model/SubscriptionReq.md)|  |

### Return type

[**\Elepay\Model\SubscriptionDto**](../Model/SubscriptionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=utf-8`
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubscriptionPeriods()`

```php
listSubscriptionPeriods($subscriptionId, $limit, $offset): \Elepay\Model\SubscriptionPeriodsResponse
```

List subscription periods

定期課金の周期情報をリストで取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 'subscriptionId_example'; // string | Subscription ID
$limit = 20; // int | 最大件数
$offset = 0; // int | 検索開始位置

try {
    $result = $apiInstance->listSubscriptionPeriods($subscriptionId, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->listSubscriptionPeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | **string**| Subscription ID |
 **limit** | **int**| 最大件数 | [optional] [default to 20]
 **offset** | **int**| 検索開始位置 | [optional] [default to 0]

### Return type

[**\Elepay\Model\SubscriptionPeriodsResponse**](../Model/SubscriptionPeriodsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubscriptions()`

```php
listSubscriptions($customerId, $from, $to, $status, $limit, $offset): \Elepay\Model\SubscriptionsResponse
```

List subscriptions

定期課金を一覧で取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Customer ID
$from = 56; // int | 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。
$to = 56; // int | 終了時間（UTC）。指定した時間以前に作成されたデータを取得します
$status = new \Elepay\Model\\Elepay\Model\SubscriptionStatusType(); // \Elepay\Model\SubscriptionStatusType | 定期課金ステータス
$limit = 20; // int | 最大件数
$offset = 0; // int | 検索開始位置

try {
    $result = $apiInstance->listSubscriptions($customerId, $from, $to, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->listSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Customer ID | [optional]
 **from** | **int**| 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 | [optional]
 **to** | **int**| 終了時間（UTC）。指定した時間以前に作成されたデータを取得します | [optional]
 **status** | [**\Elepay\Model\SubscriptionStatusType**](../Model/.md)| 定期課金ステータス | [optional]
 **limit** | **int**| 最大件数 | [optional] [default to 20]
 **offset** | **int**| 検索開始位置 | [optional] [default to 0]

### Return type

[**\Elepay\Model\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resumeSubscription()`

```php
resumeSubscription($subscriptionId): \Elepay\Model\SubscriptionDto
```

Resume subscription

延滞中(status=past_due)の定期課金を再開させます。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 'subscriptionId_example'; // string | Subscription ID

try {
    $result = $apiInstance->resumeSubscription($subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->resumeSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | **string**| Subscription ID |

### Return type

[**\Elepay\Model\SubscriptionDto**](../Model/SubscriptionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSubscription()`

```php
retrieveSubscription($subscriptionId): \Elepay\Model\SubscriptionDto
```

Retrieve subscription

定期課金情報を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 'subscriptionId_example'; // string | Subscription ID

try {
    $result = $apiInstance->retrieveSubscription($subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->retrieveSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | **string**| Subscription ID |

### Return type

[**\Elepay\Model\SubscriptionDto**](../Model/SubscriptionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startSubscription()`

```php
startSubscription($subscriptionId): \Elepay\Model\SubscriptionDto
```

Start subscription

新規(status=new)の定期課金を開始させます。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 'subscriptionId_example'; // string | Subscription ID

try {
    $result = $apiInstance->startSubscription($subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->startSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | **string**| Subscription ID |

### Return type

[**\Elepay\Model\SubscriptionDto**](../Model/SubscriptionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($subscriptionId, $subscriptionUpdateReq): \Elepay\Model\SubscriptionDto
```

Update subscription

定期課金を更新します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Elepay\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 'subscriptionId_example'; // string | Subscription ID
$subscriptionUpdateReq = new \Elepay\Model\SubscriptionUpdateReq(); // \Elepay\Model\SubscriptionUpdateReq

try {
    $result = $apiInstance->updateSubscription($subscriptionId, $subscriptionUpdateReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | **string**| Subscription ID |
 **subscriptionUpdateReq** | [**\Elepay\Model\SubscriptionUpdateReq**](../Model/SubscriptionUpdateReq.md)|  |

### Return type

[**\Elepay\Model\SubscriptionDto**](../Model/SubscriptionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=utf-8`
- **Accept**: `application/json;charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
