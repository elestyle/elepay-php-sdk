# # ChargeReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 金額 | [optional] 
**currency** | **string** | 通貨コード (ISO_4217) | [optional] [default to 'JPY']
**payment_method** | [**\OpenAPI\Client\ElepayPojo\PaymentMethodType**](PaymentMethodType.md) |  | [optional] 
**order_no** | **string** | お客様側のシステムオーダーNo（例：注文番号、決済IDなど） | [optional] 
**description** | **string** | 決済に関する説明 | [optional] 
**extra** | **map[string,object]** | 決済に関する追加情報がある場合に利用します。 | [optional] 
**metadata** | **map[string,object]** | メタデータ | [optional] 
**client_ip** | **string** | Client IP アドレス | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


