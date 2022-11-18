<?php
/**
 * ChannelPropertiesDto
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Elepay\Model;

use \ArrayAccess;
use \Elepay\ObjectSerializer;

/**
 * ChannelPropertiesDto Class Doc Comment
 *
 * @category Class
 * @description 決済方法関する情報
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelPropertiesDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelPropertiesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'isSupportRefund' => 'bool',
        'isSupportPartialRefund' => 'bool',
        'isSupportMultipleRefund' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'isSupportRefund' => null,
        'isSupportPartialRefund' => null,
        'isSupportMultipleRefund' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'isSupportRefund' => 'isSupportRefund',
        'isSupportPartialRefund' => 'isSupportPartialRefund',
        'isSupportMultipleRefund' => 'isSupportMultipleRefund'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isSupportRefund' => 'setIsSupportRefund',
        'isSupportPartialRefund' => 'setIsSupportPartialRefund',
        'isSupportMultipleRefund' => 'setIsSupportMultipleRefund'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isSupportRefund' => 'getIsSupportRefund',
        'isSupportPartialRefund' => 'getIsSupportPartialRefund',
        'isSupportMultipleRefund' => 'getIsSupportMultipleRefund'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['isSupportRefund'] = $data['isSupportRefund'] ?? null;
        $this->container['isSupportPartialRefund'] = $data['isSupportPartialRefund'] ?? null;
        $this->container['isSupportMultipleRefund'] = $data['isSupportMultipleRefund'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets isSupportRefund
     *
     * @return bool|null
     */
    public function getIsSupportRefund()
    {
        return $this->container['isSupportRefund'];
    }

    /**
     * Sets isSupportRefund
     *
     * @param bool|null $isSupportRefund 返金 true 利用可能 false 利用不可
     *
     * @return self
     */
    public function setIsSupportRefund($isSupportRefund)
    {
        $this->container['isSupportRefund'] = $isSupportRefund;

        return $this;
    }

    /**
     * Gets isSupportPartialRefund
     *
     * @return bool|null
     */
    public function getIsSupportPartialRefund()
    {
        return $this->container['isSupportPartialRefund'];
    }

    /**
     * Sets isSupportPartialRefund
     *
     * @param bool|null $isSupportPartialRefund 一部返金 true 利用可能 false 利用不可
     *
     * @return self
     */
    public function setIsSupportPartialRefund($isSupportPartialRefund)
    {
        $this->container['isSupportPartialRefund'] = $isSupportPartialRefund;

        return $this;
    }

    /**
     * Gets isSupportMultipleRefund
     *
     * @return bool|null
     */
    public function getIsSupportMultipleRefund()
    {
        return $this->container['isSupportMultipleRefund'];
    }

    /**
     * Sets isSupportMultipleRefund
     *
     * @param bool|null $isSupportMultipleRefund 複数回返金 true 利用可能 false 一回のみ
     *
     * @return self
     */
    public function setIsSupportMultipleRefund($isSupportMultipleRefund)
    {
        $this->container['isSupportMultipleRefund'] = $isSupportMultipleRefund;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


