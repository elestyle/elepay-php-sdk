# # ChannelPropertiesDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isSupportRefund** | **bool** | 返金 true 利用可能 false 利用不可 | [optional]
**isSupportPartialRefund** | **bool** | 一部返金 true 利用可能 false 利用不可 | [optional]
**isSupportMultipleRefund** | **bool** | 複数回返金 true 利用可能 false 一回のみ | [optional]
**isSupportSource** | **bool** | カスタマ機能とソース true 利用可能 false 利用不可 | [optional]
**isSupportMultipleSource** | **bool** | 複数ソース true バインディング可能 false バインディング不可 | [optional]
**maxAmount** | **int** | 最大可能金額 | [optional]
**minAmount** | **int** | 最小可能金額 | [optional]
**resourceWebEnv** | [**\Elepay\Model\ResourceWebEnvType**](ResourceWebEnvType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
