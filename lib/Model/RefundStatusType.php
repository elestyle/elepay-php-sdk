<?php
/**
 * RefundStatusType
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
 * RefundStatusType Class Doc Comment
 *
 * @category Class
 * @description 返金状態 - pending 未返金 - refunded 返金済み
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundStatusType
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'pending';
    const REFUNDED = 'refunded';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::REFUNDED,
        ];
    }
}


