# OpenAPIClient-php

elepay APIはRESTをベースに構成された決済APIです。支払い処理、返金処理など、決済に関わる運用における様々なことができます。

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.1.7
- Package version: 1.1.6
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://elepay.io](https://elepay.io)

## Requirements

PHP 7.1 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "elestyle/elepay-php-sdk": ">=1.1.7"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Elepay\Configuration::getDefaultConfiguration()
              ->setUsername('Your Elepay Secret Key')
              ->setPassword('');


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

## Documentation for API Endpoints

All URIs are relative to *https://api.elepay.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChargeApi* | [**createCharge**](docs/Api/ChargeApi.md#createcharge) | **POST** /charges | Create charge
*ChargeApi* | [**listCharges**](docs/Api/ChargeApi.md#listcharges) | **GET** /charges | List charges
*ChargeApi* | [**retrieveCharge**](docs/Api/ChargeApi.md#retrievecharge) | **GET** /charges/{id} | Retrieve charge
*CodeApi* | [**closeCode**](docs/Api/CodeApi.md#closecode) | **DELETE** /codes/{codeId} | Close EasyQR code
*CodeApi* | [**createCode**](docs/Api/CodeApi.md#createcode) | **POST** /codes | Create EasyQR code
*CodeApi* | [**retrieveCode**](docs/Api/CodeApi.md#retrievecode) | **GET** /codes/{codeId} | Retrieve EasyQR code
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /customers | Create customer
*CustomerApi* | [**createSource**](docs/Api/CustomerApi.md#createsource) | **POST** /customers/{customerId}/sources | Create source
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /customers/{customerId} | Delete customer
*CustomerApi* | [**deleteSource**](docs/Api/CustomerApi.md#deletesource) | **DELETE** /customers/{customerId}/sources/{sourceId} | Delete source
*CustomerApi* | [**listCustomers**](docs/Api/CustomerApi.md#listcustomers) | **GET** /customers | List customers
*CustomerApi* | [**listSources**](docs/Api/CustomerApi.md#listsources) | **GET** /customers/{customerId}/sources | List sources by customer ID
*CustomerApi* | [**retrieveCustomer**](docs/Api/CustomerApi.md#retrievecustomer) | **GET** /customers/{customerId} | Retrieve customer
*CustomerApi* | [**retrieveSource**](docs/Api/CustomerApi.md#retrievesource) | **GET** /customers/{customerId}/sources/{sourceId} | Retrieve source
*PaymentMethodApi* | [**listPaymentMethods**](docs/Api/PaymentMethodApi.md#listpaymentmethods) | **GET** /payment-methods | List supported payment methods
*RefundApi* | [**createRefund**](docs/Api/RefundApi.md#createrefund) | **POST** /charges/{id}/refunds | Create refund
*RefundApi* | [**listChargesRefunds**](docs/Api/RefundApi.md#listchargesrefunds) | **GET** /charges/{id}/refunds | List refunds
*RefundApi* | [**retrieveChargeRefund**](docs/Api/RefundApi.md#retrievechargerefund) | **GET** /charges/{id}/refunds/{refundId} | Retrieve refund


## Documentation For Models

 - [ChargeDateTimeType](docs/Model/ChargeDateTimeType.md)
 - [ChargeDto](docs/Model/ChargeDto.md)
 - [ChargeReq](docs/Model/ChargeReq.md)
 - [ChargeStatusType](docs/Model/ChargeStatusType.md)
 - [ChargesResponse](docs/Model/ChargesResponse.md)
 - [CodeDto](docs/Model/CodeDto.md)
 - [CodeReq](docs/Model/CodeReq.md)
 - [CodeStatusType](docs/Model/CodeStatusType.md)
 - [CustomerDto](docs/Model/CustomerDto.md)
 - [CustomerReq](docs/Model/CustomerReq.md)
 - [CustomerResponse](docs/Model/CustomerResponse.md)
 - [PaymentMethodDto](docs/Model/PaymentMethodDto.md)
 - [PaymentMethodResponse](docs/Model/PaymentMethodResponse.md)
 - [PaymentMethodType](docs/Model/PaymentMethodType.md)
 - [RefundDto](docs/Model/RefundDto.md)
 - [RefundReq](docs/Model/RefundReq.md)
 - [RefundStatusType](docs/Model/RefundStatusType.md)
 - [RefundsDto](docs/Model/RefundsDto.md)
 - [RefundsResponse](docs/Model/RefundsResponse.md)
 - [ResourceType](docs/Model/ResourceType.md)
 - [SortOrderType](docs/Model/SortOrderType.md)
 - [SourceDto](docs/Model/SourceDto.md)
 - [SourceReq](docs/Model/SourceReq.md)
 - [SourceResponse](docs/Model/SourceResponse.md)
 - [SourceStatusType](docs/Model/SourceStatusType.md)


## Documentation For Authorization



## basicAuth


- **Type**: HTTP basic authentication


## Author

support@elestyle.jp

