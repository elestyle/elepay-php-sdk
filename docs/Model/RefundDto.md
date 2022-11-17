# # RefundDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Refund ID | [optional]
**object** | **string** | 対象種類の表記 | [optional] [default to 'refund']
**chargeId** | **string** | Charge ID | [optional]
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional]
**amount** | **int** | 返金金額。全額返金、及び amount を指定することで金額の部分返金を行うことができます。 | [optional]
**currency** | **string** | 通貨コード (ISO_4217) | [optional]
**metadata** | **array<string,string>** | 返金メタデータ | [optional]
**reason** | **string** | 返金理由 | [optional]
**status** | [**\Elepay\Model\RefundStatusType**](RefundStatusType.md) |  | [optional]
**refundedTime** | **int** | 返金を行う時間のUTCタイムスタンプ。 | [optional]
**createTime** | **int** | 返金新規時間のUTCタイムスタンプ。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
