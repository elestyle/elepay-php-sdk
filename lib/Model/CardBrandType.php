<?php
/**
 * CardBrandType
 *
 * PHP version 7.4
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
 * The version of the OpenAPI document: 1.2.3
 * Contact: support@elestyle.jp
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Elepay\Model;
use \Elepay\ObjectSerializer;

/**
 * CardBrandType Class Doc Comment
 *
 * @category Class
 * @description カードブランド
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CardBrandType
{
    /**
     * Possible values of this enum
     */
    public const VISA = 'visa';

    public const MASTERCARD = 'mastercard';

    public const AMEX = 'amex';

    public const JCB = 'jcb';

    public const DINERS = 'diners';

    public const UNIONPAY = 'unionpay';

    public const DISCOVER = 'discover';

    public const FELICA = 'felica';

    public const UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VISA,
            self::MASTERCARD,
            self::AMEX,
            self::JCB,
            self::DINERS,
            self::UNIONPAY,
            self::DISCOVER,
            self::FELICA,
            self::UNKNOWN
        ];
    }
}


