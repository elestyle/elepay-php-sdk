# # DisputeDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Dispute ID | [optional] 
**object** | **string** | 対象種類の表記 | [optional] [default to 'dispute']
**chargeId** | **string** | Charge ID | [optional] 
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional] 
**amount** | **int** | Disputed amount. Usually the amount of the charge,  but can differ (usually because of currency fluctuation or because only part of the order is disputed). | [optional] 
**currency** | **string** | 通貨コード (ISO_4217) | [optional] 
**metadata** | **map[string,string]** | 返金メタデータ | [optional] 
**reason** | **string** | TODO | [optional] 
**status** | [**\Elepay\Model\DisputeStatusType**](DisputeStatusType.md) |  | [optional] 
**resolvedTime** | **int** | TODO | [optional] 
**createTime** | **int** | 返金新規時間のUTCタイムスタンプ。 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


