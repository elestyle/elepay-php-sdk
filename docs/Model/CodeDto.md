# # CodeDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | EasyQRコードID | [optional] 
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional] 
**codeUrl** | **string** | EasyQRコードURL | [optional] 
**amount** | **int** | 支払い金額 | [optional] 
**currency** | **string** | 通貨コード (ISO_4217) | [optional] [default to 'JPY']
**orderNo** | **string** | お客様システム側のオーダーNo、例えば注文番号、決済IDなど | [optional] 
**description** | **string** | 支払いオブジェクトの「決済に関する説明」 | [optional] 
**metadata** | **map[string,string]** | 支払いオブジェクトの「メタデータ」 | [optional] 
**status** | [**\Elepay\Model\CodeStatusType**](CodeStatusType.md) |  | [optional] 
**expired** | **bool** | EasyQRコード有効有無 | [optional] 
**expiryTime** | **int** | EasyQRコード有効期限のUTCタイムスタンプ | [optional] 
**createTime** | **int** | コード新規時間のUTCタイムスタンプ | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


