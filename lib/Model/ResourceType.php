<?php
/**
 * ResourceType
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
 * ResourceType Class Doc Comment
 *
 * @category Class
 * @description 決済リソース - web WEBブラウザ - ios iOS Nativeアプリ - android Android Nativeアプリ - liff Line LIFFアプリ - mini WeChatミニプログラム - cpm CPM決済、利用者提示型QRコード - mpm MPM決済、店舗側提示型QRコード - reader カードリーダー決済(リーダー設備が必要) - posapp POSアプリ決済(POSアプリが連携必要)
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResourceType
{
    /**
     * Possible values of this enum
     */
    public const WEB = 'web';

    public const IOS = 'ios';

    public const ANDROID = 'android';

    public const LIFF = 'liff';

    public const MINI = 'mini';

    public const CPM = 'cpm';

    public const MPM = 'mpm';

    public const READER = 'reader';

    public const POSAPP = 'posapp';

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
            self::MINI,
            self::CPM,
            self::MPM,
            self::READER,
            self::POSAPP
        ];
    }
}


