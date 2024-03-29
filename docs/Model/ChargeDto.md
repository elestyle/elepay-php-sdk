# # ChargeDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Charge ID | [optional]
**appId** | **string** | App ID | [optional]
**object** | **string** | 対象種類の表記 | [optional] [default to 'charge']
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional]
**amount** | **int** | 支払い金額 | [optional]
**authorizeAmount** | **int** | 事前承認金額 | [optional]
**currency** | **string** | 通貨コード (ISO_4217) | [optional] [default to 'JPY']
**authorize** | **bool** | 事前承認フラグ | [optional]
**paymentMethod** | [**\Elepay\Model\PaymentMethodType**](PaymentMethodType.md) |  | [optional]
**resource** | [**\Elepay\Model\ResourceType**](ResourceType.md) |  | [optional]
**orderNo** | **string** | お客様システム側のオーダーNo、例えば注文番号、決済IDなど | [optional]
**description** | **string** | 支払い説明文 | [optional]
**extra** | **array<string,string>** | 支払いエキストラデータ | [optional]
**metadata** | **array<string,string>** | 支払いメタデータ | [optional]
**cardInfo** | [**\Elepay\Model\CardInfo**](CardInfo.md) |  | [optional]
**voucherNo** | **string** | プロバイダー決済伝票番号 | [optional]
**clientIp** | **string** | Client IP アドレス | [optional]
**paid** | **bool** | 支払い済みフラグ | [optional]
**refunded** | **bool** | 返金済みフラグ | [optional]
**disputed** | **bool** | 不審請求フラグ | [optional]
**refunds** | [**\Elepay\Model\RefundsDto**](RefundsDto.md) |  | [optional]
**status** | [**\Elepay\Model\ChargeStatusType**](ChargeStatusType.md) |  | [optional]
**codeContent** | **string** | 店舗側提示型QRコード(リソースはmpm場合のみ) | [optional]
**credential** | **string** | Client SDKの認証情報 | [optional]
**paidTime** | **int** | 支払い時間のUTCタイムスタンプ | [optional]
**refundTime** | **int** | 返金時間のUTCタイムスタンプ | [optional]
**expiryTime** | **int** | 支払い請求有効時間のUTCタイムスタンプ | [optional]
**settleTime** | **int** | 支払い締め時間のUTCタイムスタンプ | [optional]
**createTime** | **int** | 支払い新規時間のUTCタイムスタンプ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
