<?php
/**
 * SubscriptionStatusType
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
 * The version of the OpenAPI document: 1.2.0
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
 * SubscriptionStatusType Class Doc Comment
 *
 * @category Class
 * @description 定期課金ステータス - new 新規 - active 有効 - past_due 延滞中 - canceled 取消済み
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubscriptionStatusType
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'new';

    public const ACTIVE = 'active';

    public const PAST_DUE = 'past_due';

    public const CANCELED = 'canceled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::ACTIVE,
            self::PAST_DUE,
            self::CANCELED
        ];
    }
}


