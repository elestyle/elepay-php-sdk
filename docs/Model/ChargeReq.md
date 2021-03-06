# # ChargeReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 金額 | 
**currency** | **string** | 通貨コード (ISO_4217) | [optional] [default to 'JPY']
**paymentMethod** | [**\Elepay\Model\PaymentMethodType**](PaymentMethodType.md) |  | 
**resource** | [**\Elepay\Model\ResourceType**](ResourceType.md) |  | [optional] 
**orderNo** | **string** | お客様側のシステムオーダーNo（例：注文番号、決済IDなど） 最大桁数は50桁です。 | 
**description** | **string** | 決済に関する説明 | [optional] 
**extra** | **map[string,string]** | 決済に関する追加情報がある場合に利用します。具体的設定情報は「開発ガイド-&gt;決済Extra情報設定」を参照してください。 | [optional] 
**metadata** | **map[string,string]** | メタデータ キーバリューの任意データ。 キーは20個まで、バリューは255バイト以内の文字列。 「route」、「__」で始まる文字列は予約キー。 | [optional] 
**clientIp** | **string** | Client IP アドレス | [optional] 
**customerId** | **string** | カスタマID | [optional] 
**sourceId** | **string** | カスタマソースID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


