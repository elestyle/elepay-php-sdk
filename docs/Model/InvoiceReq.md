# # InvoiceReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**memo** | **string** |  | [optional]
**customerId** | **string** | カスタマID | [optional]
**amount** | **int** | payment amount | [optional]
**currency** | **string** | currency code | [optional] [default to 'JPY']
**expiryTime** | **int** | expiry time | [optional]
**items** | [**\Elepay\Model\InvoiceItem[]**](InvoiceItem.md) |  | [optional]
**remark** | **string** | 備考 | [optional]
**metadata** | **array<string,string>** | メタデータ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
