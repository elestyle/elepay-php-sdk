# # SourceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Source ID | [optional]
**object** | **string** | 対象種類の表記 | [optional] [default to 'source']
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional]
**paymentMethod** | [**\Elepay\Model\PaymentMethodType**](PaymentMethodType.md) |  | [optional]
**resource** | [**\Elepay\Model\ResourceType**](ResourceType.md) |  | [optional]
**description** | **string** | カスタマソースに関する説明 | [optional]
**extra** | **array<string,string>** | カスタマソースエキストラデータ | [optional]
**info** | **array<string,object>** | カスタマソース情報 | [optional]
**cardInfo** | [**\Elepay\Model\CardInfo**](CardInfo.md) |  | [optional]
**metadata** | **array<string,string>** | メタデータ | [optional]
**credential** | **string** | Client SDK の認証情報 | [optional]
**status** | [**\Elepay\Model\SourceStatusType**](SourceStatusType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
