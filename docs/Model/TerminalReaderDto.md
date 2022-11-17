# # TerminalReaderDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Reader ID | [optional]
**appId** | **string** | App ID | [optional]
**object** | **string** | 対象種類の表記 | [optional] [default to 'terminal.reader']
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional]
**locationId** | **string** | Location ID | [optional]
**serialNumber** | **string** | シリアルナンバー | [optional]
**registrationCode** | **string** | ペアリングコード | [optional]
**metadata** | **array<string,string>** | メタデータ | [optional]
**status** | [**\Elepay\Model\ReaderStatusType**](ReaderStatusType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
