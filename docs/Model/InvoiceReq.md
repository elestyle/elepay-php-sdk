# # InvoiceReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerId** | **string** | customer id | [optional] 
**amount** | **int** | payment amount | [optional] 
**currency** | **string** | currency code | [optional] [default to 'JPY']
**expiryTime** | **int** | expiry time | [optional] 
**items** | [**\Elepay\Model\InvoiceItem[]**](InvoiceItem.md) |  | [optional] 
**remark** | **string** | 備考 | [optional] 
**metadata** | **map[string,string]** | メタデータ | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


