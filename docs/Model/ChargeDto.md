# # ChargeDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Charge ID | [optional] 
**object** | **string** | 対象種類の表記 | [optional] [default to 'charge']
**live_mode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional] 
**amount** | **int** | 支払い金額 | [optional] 
**currency** | **string** | 通貨コード (ISO_4217) | [optional] [default to 'JPY']
**payment_method** | [**\OpenAPI\Client\ElepayPojo\PaymentMethodType**](PaymentMethodType.md) |  | [optional] 
**order_no** | **string** | お客様システム側のオーダーNo、例えば注文番号、決済IDなど | [optional] 
**description** | **string** | 支払い説明文 | [optional] 
**extra** | **map[string,object]** | 支払いエキストラデータ | [optional] 
**metadata** | **map[string,object]** | 支払いメタデータ | [optional] 
**client_ip** | **string** | Client IP アドレス | [optional] 
**paid** | **bool** | 支払い済みフラグ | [optional] 
**refunded** | **bool** | 返金済みフラグ | [optional] 
**refunds** | [**\OpenAPI\Client\ElepayPojo\RefundExtDto**](RefundExtDto.md) |  | [optional] 
**status** | **string** | 支払い状態 | [optional] 
**credential** | **string** | Client SDK の認証情報 | [optional] 
**paid_time** | **int** | 支払い時間のUTCタイムスタンプ | [optional] 
**refund_time** | **int** | 返金時間のUTCタイムスタンプ | [optional] 
**expiry_time** | **int** | 支払い請求有効時間のUTCタイムスタンプ | [optional] 
**settle_time** | **int** | 支払い締め時間のUTCタイムスタンプ | [optional] 
**create_time** | **int** | 支払い新規時間のUTCタイムスタンプ | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


