# OpenAPIClient-php

elepay APIはRESTをベースに構成された決済APIです。支払い処理、返金処理など、決済に関わる運用における様々なことができます。

For more information, please visit [https://elepay.io](https://elepay.io).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "elestyle/elepay-php-sdk": ">=1.2.3"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
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

```

## API Endpoints

All URIs are relative to *https://api.elepay.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChargeApi* | [**captureCharge**](docs/Api/ChargeApi.md#capturecharge) | **POST** /charges/{id}/capture | Capture charge
*ChargeApi* | [**createCharge**](docs/Api/ChargeApi.md#createcharge) | **POST** /charges | Create charge
*ChargeApi* | [**listCharges**](docs/Api/ChargeApi.md#listcharges) | **GET** /charges | List charges
*ChargeApi* | [**retrieveCharge**](docs/Api/ChargeApi.md#retrievecharge) | **GET** /charges/{id} | Retrieve charge
*ChargeApi* | [**retrieveChargeStatus**](docs/Api/ChargeApi.md#retrievechargestatus) | **GET** /charges/{id}/status | Retrieve charge&#39;s status
*ChargeApi* | [**revokeCharge**](docs/Api/ChargeApi.md#revokecharge) | **POST** /charges/{id}/revoke | Revoke charge
*CodeApi* | [**closeCode**](docs/Api/CodeApi.md#closecode) | **DELETE** /codes/{codeId} | Close EasyQR code
*CodeApi* | [**createCode**](docs/Api/CodeApi.md#createcode) | **POST** /codes | Create EasyQR code
*CodeApi* | [**retrieveCode**](docs/Api/CodeApi.md#retrievecode) | **GET** /codes/{codeId} | Retrieve EasyQR code
*CodeSettingApi* | [**listCodePaymentMethods**](docs/Api/CodeSettingApi.md#listcodepaymentmethods) | **GET** /code-setting/payment-methods | List all enabled EasyQR payment methods
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /customers | Create customer
*CustomerApi* | [**createSource**](docs/Api/CustomerApi.md#createsource) | **POST** /customers/{customerId}/sources | Create source
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /customers/{customerId} | Delete customer
*CustomerApi* | [**deleteSource**](docs/Api/CustomerApi.md#deletesource) | **DELETE** /customers/{customerId}/sources/{sourceId} | Delete source
*CustomerApi* | [**listCustomers**](docs/Api/CustomerApi.md#listcustomers) | **GET** /customers | List customers
*CustomerApi* | [**listSources**](docs/Api/CustomerApi.md#listsources) | **GET** /customers/{customerId}/sources | List sources by customer ID
*CustomerApi* | [**retrieveCustomer**](docs/Api/CustomerApi.md#retrievecustomer) | **GET** /customers/{customerId} | Retrieve customer
*CustomerApi* | [**retrieveSource**](docs/Api/CustomerApi.md#retrievesource) | **GET** /customers/{customerId}/sources/{sourceId} | Retrieve source
*CustomerApi* | [**retrieveSourceStatus**](docs/Api/CustomerApi.md#retrievesourcestatus) | **GET** /sources/{sourceId}/status | Retrieve source&#39;s status
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **POST** /customers/{customerId} | Update customer
*DisputeApi* | [**listDisputes**](docs/Api/DisputeApi.md#listdisputes) | **GET** /disputes | List disputes
*DisputeApi* | [**retrieveDispute**](docs/Api/DisputeApi.md#retrievedispute) | **GET** /disputes/{id} | Retrieve dispute
*InvoiceApi* | [**cancelInvoice**](docs/Api/InvoiceApi.md#cancelinvoice) | **POST** /invoices/{invoiceId}/cancel | cancel invoice
*InvoiceApi* | [**createInvoice**](docs/Api/InvoiceApi.md#createinvoice) | **POST** /invoices | Create invoice
*InvoiceApi* | [**deleteInvoice**](docs/Api/InvoiceApi.md#deleteinvoice) | **DELETE** /invoices/{invoiceId} | Delete invoice
*InvoiceApi* | [**listInvoices**](docs/Api/InvoiceApi.md#listinvoices) | **GET** /invoices | List invoices
*InvoiceApi* | [**retrieveInvoice**](docs/Api/InvoiceApi.md#retrieveinvoice) | **GET** /invoices/{invoiceId} | Retrieve invoice
*InvoiceApi* | [**sendInvoice**](docs/Api/InvoiceApi.md#sendinvoice) | **POST** /invoices/{invoiceId}/send | send invoice
*InvoiceApi* | [**submitInvoice**](docs/Api/InvoiceApi.md#submitinvoice) | **POST** /invoices/{invoiceId}/submit | submit invoice
*InvoiceApi* | [**updateInvoice**](docs/Api/InvoiceApi.md#updateinvoice) | **POST** /invoices/{invoiceId} | Update invoice
*PaymentMethodApi* | [**listPaymentMethods**](docs/Api/PaymentMethodApi.md#listpaymentmethods) | **GET** /payment-methods | List supported payment methods
*RefundApi* | [**createRefund**](docs/Api/RefundApi.md#createrefund) | **POST** /charges/{id}/refunds | Create refund
*RefundApi* | [**listChargesRefunds**](docs/Api/RefundApi.md#listchargesrefunds) | **GET** /charges/{id}/refunds | List refunds
*RefundApi* | [**retrieveChargeRefund**](docs/Api/RefundApi.md#retrievechargerefund) | **GET** /charges/{id}/refunds/{refundId} | Retrieve refund
*SubscriptionApi* | [**cancelSubscription**](docs/Api/SubscriptionApi.md#cancelsubscription) | **POST** /subscriptions/{subscriptionId}/cancel | Cancel subscription
*SubscriptionApi* | [**createSubscription**](docs/Api/SubscriptionApi.md#createsubscription) | **POST** /subscriptions | Create subscription
*SubscriptionApi* | [**listSubscriptionPeriods**](docs/Api/SubscriptionApi.md#listsubscriptionperiods) | **GET** /subscriptions/{subscriptionId}/periods | List subscription periods
*SubscriptionApi* | [**listSubscriptions**](docs/Api/SubscriptionApi.md#listsubscriptions) | **GET** /subscriptions | List subscriptions
*SubscriptionApi* | [**resumeSubscription**](docs/Api/SubscriptionApi.md#resumesubscription) | **POST** /subscriptions/{subscriptionId}/resume | Resume subscription
*SubscriptionApi* | [**retrieveSubscription**](docs/Api/SubscriptionApi.md#retrievesubscription) | **GET** /subscriptions/{subscriptionId} | Retrieve subscription
*SubscriptionApi* | [**startSubscription**](docs/Api/SubscriptionApi.md#startsubscription) | **POST** /subscriptions/{subscriptionId}/start | Start subscription
*SubscriptionApi* | [**updateSubscription**](docs/Api/SubscriptionApi.md#updatesubscription) | **POST** /subscriptions/{subscriptionId} | Update subscription
*TerminalApi* | [**createReader**](docs/Api/TerminalApi.md#createreader) | **POST** /terminal/readers | create terminal reader
*TerminalApi* | [**deleteReader**](docs/Api/TerminalApi.md#deletereader) | **DELETE** /terminal/readers/{readerId} | delete reader
*TerminalApi* | [**getReader**](docs/Api/TerminalApi.md#getreader) | **GET** /terminal/readers/{readerId} | get reader
*TerminalApi* | [**listLocations**](docs/Api/TerminalApi.md#listlocations) | **GET** /terminal/locations | list locations
*TerminalApi* | [**listReaders**](docs/Api/TerminalApi.md#listreaders) | **GET** /terminal/readers | list readers

## Models

- [CardBrandType](docs/Model/CardBrandType.md)
- [CardInfo](docs/Model/CardInfo.md)
- [ChannelPropertiesDto](docs/Model/ChannelPropertiesDto.md)
- [ChargeCaptureReq](docs/Model/ChargeCaptureReq.md)
- [ChargeDateTimeType](docs/Model/ChargeDateTimeType.md)
- [ChargeDto](docs/Model/ChargeDto.md)
- [ChargeReq](docs/Model/ChargeReq.md)
- [ChargeStatusDto](docs/Model/ChargeStatusDto.md)
- [ChargeStatusType](docs/Model/ChargeStatusType.md)
- [ChargesResponse](docs/Model/ChargesResponse.md)
- [CodeDto](docs/Model/CodeDto.md)
- [CodeItem](docs/Model/CodeItem.md)
- [CodePaymentMethodResponse](docs/Model/CodePaymentMethodResponse.md)
- [CodeReq](docs/Model/CodeReq.md)
- [CodeStatusType](docs/Model/CodeStatusType.md)
- [CustomerDto](docs/Model/CustomerDto.md)
- [CustomerPropertiesDto](docs/Model/CustomerPropertiesDto.md)
- [CustomerReq](docs/Model/CustomerReq.md)
- [CustomerResponse](docs/Model/CustomerResponse.md)
- [CustomerStatusType](docs/Model/CustomerStatusType.md)
- [DisputeDateTimeType](docs/Model/DisputeDateTimeType.md)
- [DisputeDto](docs/Model/DisputeDto.md)
- [DisputeStatusType](docs/Model/DisputeStatusType.md)
- [DisputesResponse](docs/Model/DisputesResponse.md)
- [InvoiceDto](docs/Model/InvoiceDto.md)
- [InvoiceItem](docs/Model/InvoiceItem.md)
- [InvoiceReq](docs/Model/InvoiceReq.md)
- [InvoiceStatusType](docs/Model/InvoiceStatusType.md)
- [InvoicesResponse](docs/Model/InvoicesResponse.md)
- [LocationDto](docs/Model/LocationDto.md)
- [LocationsResponse](docs/Model/LocationsResponse.md)
- [PaymentMethodDto](docs/Model/PaymentMethodDto.md)
- [PaymentMethodResponse](docs/Model/PaymentMethodResponse.md)
- [PaymentMethodType](docs/Model/PaymentMethodType.md)
- [ReaderStatusType](docs/Model/ReaderStatusType.md)
- [RefundDto](docs/Model/RefundDto.md)
- [RefundReq](docs/Model/RefundReq.md)
- [RefundStatusType](docs/Model/RefundStatusType.md)
- [RefundsDto](docs/Model/RefundsDto.md)
- [RefundsResponse](docs/Model/RefundsResponse.md)
- [ResourceType](docs/Model/ResourceType.md)
- [ResourceWebEnvType](docs/Model/ResourceWebEnvType.md)
- [SortOrderType](docs/Model/SortOrderType.md)
- [SourceDto](docs/Model/SourceDto.md)
- [SourceReq](docs/Model/SourceReq.md)
- [SourceResponse](docs/Model/SourceResponse.md)
- [SourceStatusDto](docs/Model/SourceStatusDto.md)
- [SourceStatusType](docs/Model/SourceStatusType.md)
- [SubscriptionDto](docs/Model/SubscriptionDto.md)
- [SubscriptionIntervalType](docs/Model/SubscriptionIntervalType.md)
- [SubscriptionPeriodDto](docs/Model/SubscriptionPeriodDto.md)
- [SubscriptionPeriodsResponse](docs/Model/SubscriptionPeriodsResponse.md)
- [SubscriptionReq](docs/Model/SubscriptionReq.md)
- [SubscriptionScheduleChargesResponse](docs/Model/SubscriptionScheduleChargesResponse.md)
- [SubscriptionStatusType](docs/Model/SubscriptionStatusType.md)
- [SubscriptionUpdateReq](docs/Model/SubscriptionUpdateReq.md)
- [SubscriptionsResponse](docs/Model/SubscriptionsResponse.md)
- [TerminalReaderDto](docs/Model/TerminalReaderDto.md)
- [TerminalReaderReq](docs/Model/TerminalReaderReq.md)
- [TerminalReadersResponse](docs/Model/TerminalReadersResponse.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication


### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@elestyle.jp

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.2.3`
    - Package version: `1.2.3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
