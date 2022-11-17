# # SubscriptionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Subscription ID | [optional]
**appId** | **string** | App ID | [optional]
**object** | **string** | 対象種類の表記 | [optional] [default to 'subscription']
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional]
**customerId** | **string** | Customer ID | [optional]
**customer** | [**\Elepay\Model\CustomerDto**](CustomerDto.md) |  | [optional]
**nextChargeTime** | **int** | 次定期課金周期開始UTCタイムスタンプ | [optional]
**isCharging** | **bool** | 処理中かどうか | [optional]
**chargedPeriods** | **int** | 成功した定期課金回数 | [optional]
**metadata** | **array<string,string>** | メタデータ | [optional]
**status** | [**\Elepay\Model\SubscriptionStatusType**](SubscriptionStatusType.md) |  | [optional]
**createTime** | **int** | 作成UTCタイムスタンプ | [optional]
**updateTime** | **int** | 更新UTCタイムスタンプ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
