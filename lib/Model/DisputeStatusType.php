<?php
/**
 * DisputeStatusType
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
 * DisputeStatusType Class Doc Comment
 *
 * @category Class
 * @description 不審請求ステータス - new 対応中 - won 主張が認められた - lost 主張が認められなかった
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DisputeStatusType
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'new';

    public const WON = 'won';

    public const LOST = 'lost';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::WON,
            self::LOST
        ];
    }
}


