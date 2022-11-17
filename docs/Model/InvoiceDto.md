# # InvoiceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Invoice ID | [optional]
**object** | **string** | 対象種類の表記 | [optional] [default to 'invoice']
**liveMode** | **bool** | 本番モードかどうか - false テストモード - true 本番モード | [optional]
**customer** | [**\Elepay\Model\CustomerDto**](CustomerDto.md) |  | [optional]
**invoiceNo** | **string** | Invoice Number | [optional]
**name** | **string** |  | [optional]
**memo** | **string** |  | [optional]
**amount** | **int** | payment amount | [optional]
**currency** | **string** | currency code | [optional] [default to 'JPY']
**status** | [**\Elepay\Model\InvoiceStatusType**](InvoiceStatusType.md) |  | [optional]
**operator** | **string** | 操作者 | [optional]
**sendTime** | **int** | create time | [optional]
**paidTime** | **int** | paid time | [optional]
**expiryTime** | **int** | expiry time | [optional]
**createTime** | **int** | create time | [optional]
**items** | [**\Elepay\Model\InvoiceItem[]**](InvoiceItem.md) |  | [optional]
**remark** | **string** | 備考 | [optional]
**metadata** | **array<string,string>** | メタデータ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
