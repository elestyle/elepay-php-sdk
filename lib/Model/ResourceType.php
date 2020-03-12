<?php
/**
 * ResourceType
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
 * The version of the OpenAPI document: 1.1.3
 * 
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
 * ResourceType Class Doc Comment
 *
 * @category Class
 * @description 決済リソース - web - ios - android - liff
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResourceType
{
    /**
     * Possible values of this enum
     */
    const WEB = 'web';
    const IOS = 'ios';
    const ANDROID = 'android';
    const LIFF = 'liff';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEB,
            self::IOS,
            self::ANDROID,
            self::LIFF,
        ];
    }
}


