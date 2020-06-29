# # CodeReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 金額 | 
**currency** | **string** | 通貨コード (ISO_4217) | [optional] [default to 'JPY']
**orderNo** | **string** | お客様側のシステムオーダーNo（例：注文番号、決済IDなど） 最大桁数は50桁です。 | 
**description** | **string** | 支払いオブジェクトの「決済に関する説明」 | [optional] 
**metadata** | **map[string,string]** | 支払いオブジェクトの「メタデータ」 | [optional] 
**expiryDuration** | **int** | EasyQRコード有効期限(分) 最小:3分、最大:30分、デフォルト:10分 | [optional] 
**frontUrl** | **string** | EasyCheckout決済が完了したあとの、戻り先ページのURL | [optional] 
**items** | [**\Elepay\Model\CodeItem[]**](CodeItem.md) | 商品に関する情報 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


