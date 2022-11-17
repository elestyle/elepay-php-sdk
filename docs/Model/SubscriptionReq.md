# # SubscriptionReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | 定期課金名 | [optional]
**customerId** | **string** | カスタマID |
**currency** | **string** | 通貨コード (ISO_4217) | [optional] [default to 'JPY']
**amount** | **int** | 每期課金金額 | [optional]
**interval** | [**\Elepay\Model\SubscriptionIntervalType**](SubscriptionIntervalType.md) |  | [optional]
**initialAmount** | **int** | 初回支払い前の固定支払額 | [optional]
**firstChargeTime** | **int** | 初回支払いUTCタイムスタンプ | [optional]
**metadata** | **array<string,string>** | メタデータ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
