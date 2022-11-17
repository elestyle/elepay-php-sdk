# # DisputeDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Dispute ID | [optional]
**object** | **string** | 対象種類の表記 | [optional] [default to 'dispute']
**chargeId** | **string** | Charge ID | [optional]
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional]
**amount** | **int** | 不審請求金額 | [optional]
**currency** | **string** | 通貨コード (ISO_4217) | [optional]
**metadata** | **array<string,string>** | メタデータ | [optional]
**reason** | **string** | 不審請求理由 | [optional]
**status** | [**\Elepay\Model\DisputeStatusType**](DisputeStatusType.md) |  | [optional]
**resolvedTime** | **int** | 対応時間のUTCタイムスタンプ | [optional]
**createTime** | **int** | 発生時間のUTCタイムスタンプ。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
