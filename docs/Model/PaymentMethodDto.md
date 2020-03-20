# # PaymentMethodDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentMethod** | [**\Elepay\Model\PaymentMethodType**](PaymentMethodType.md) |  | [optional] 
**resources** | [**\Elepay\Model\ResourceType[]**](ResourceType.md) |  | [optional] 
**brand** | **string[]** | クレジットカードの場合、利用できるクレジットカードブランド | [optional] 
**ua** | **string** | 利用できるブラウザのUserAgent | [optional] 
**channelProperties** | **map[string,object]** | 決済方法そのた設定 - isSupportPartialRefund: 一部返金 true 利用可能 false 利用不可 - isSupportMultipleRefund: 複数返金 true 複数可能 false 一回のみ | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


