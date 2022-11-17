# # CustomerDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Customer ID | [optional]
**object** | **string** | 対象種類の表記 | [optional] [default to 'customer']
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional]
**defaultSource** | **string** | デフォルトカスタマソースID | [optional]
**name** | **string** | 名前 | [optional]
**description** | **string** | カスタマに関する説明 | [optional]
**email** | **string** | メールアドレス | [optional]
**phone** | **string** | 電話番号 | [optional]
**remark** | **string** | 備考 | [optional]
**operator** | **string** | 操作者 | [optional]
**status** | [**\Elepay\Model\CustomerStatusType**](CustomerStatusType.md) |  | [optional]
**metadata** | **array<string,string>** | メタデータ | [optional]
**updateTime** | **int** | update time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
