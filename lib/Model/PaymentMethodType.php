<?php
/**
 * PaymentMethodType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * elepay API リファレンス
 *
 * elepay APIはRESTをベースに構成された決済APIです。支払い処理、返金処理など、決済に関わる運用における様々なことができます。
 *
 * The version of the OpenAPI document: 1.1.14
 * Contact: support@elestyle.jp
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Elepay\Model;
use \Elepay\ObjectSerializer;

/**
 * PaymentMethodType Class Doc Comment
 *
 * @category Class
 * @description 決済方法 - auto (利用者提示型QRコードのみ利用可能) - card (リーダーデバイスのみ利用可能)
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentMethodType
{
    /**
     * Possible values of this enum
     */
    const ALIPAY = 'alipay';
    const APPLEPAY = 'applepay';
    const APPLEPAY_CN = 'applepay_cn';
    const CREDITCARD = 'creditcard';
    const GOOGLEPAY = 'googlepay';
    const PAYPAL = 'paypal';
    const UNIONPAY = 'unionpay';
    const LINEPAY = 'linepay';
    const PAIDY = 'paidy';
    const PAYPAY = 'paypay';
    const DOCOMOPAY = 'docomopay';
    const ATONE = 'atone';
    const ORIGAMIPAY = 'origamipay';
    const MERPAY = 'merpay';
    const WECHATPAY = 'wechatpay';
    const AMAZONPAY = 'amazonpay';
    const AUPAY = 'aupay';
    const RAKUTENPAY = 'rakutenpay';
    const JCOINPAY = 'jcoinpay';
    const CARD = 'card';
    const AUTO = 'auto';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALIPAY,
            self::APPLEPAY,
            self::APPLEPAY_CN,
            self::CREDITCARD,
            self::GOOGLEPAY,
            self::PAYPAL,
            self::UNIONPAY,
            self::LINEPAY,
            self::PAIDY,
            self::PAYPAY,
            self::DOCOMOPAY,
            self::ATONE,
            self::ORIGAMIPAY,
            self::MERPAY,
            self::WECHATPAY,
            self::AMAZONPAY,
            self::AUPAY,
            self::RAKUTENPAY,
            self::JCOINPAY,
            self::CARD,
            self::AUTO,
        ];
    }
}


