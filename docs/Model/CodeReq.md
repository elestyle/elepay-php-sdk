# # CodeReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 金額 |
**currency** | **string** | 通貨コード (ISO_4217) | [optional] [default to 'JPY']
**orderNo** | **string** | お客様側のシステムオーダーNo（例：注文番号、決済IDなど） 最大桁数は50桁です。 |
**description** | **string** | 支払いオブジェクトの「決済に関する説明」 | [optional]
**extra** | **array<string,string>** | 決済に関する追加情報がある場合に利用します。具体的設定情報は「開発ガイド-&gt;決済Extra情報設定」を参照してください。 決済オブジェクトを作成する時、こちら設定したextra情報を優先利用します。 | [optional]
**metadata** | **array<string,string>** | 支払いオブジェクトの「メタデータ」 | [optional]
**expiryDuration** | **int** | EasyQRコード有効期限(分) 最小:3分、最大:30分、デフォルト:10分 | [optional]
**frontUrl** | **string** | EasyCheckout決済が完了したあとの、戻り先ページのURL | [optional]
**items** | [**\Elepay\Model\CodeItem[]**](CodeItem.md) | 商品に関する情報 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
