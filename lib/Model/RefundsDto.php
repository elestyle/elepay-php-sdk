<?php
/**
 * RefundsDto
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
 * The version of the OpenAPI document: 1.1.4
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

use \ArrayAccess;
use \Elepay\ObjectSerializer;

/**
 * RefundsDto Class Doc Comment
 *
 * @category Class
 * @description 返金のサマリー。複数回返金された場合、返金内容をサマリーして返します。
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RefundsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'totalCount' => 'int',
        'data' => '\Elepay\Model\RefundDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'totalCount' => null,
        'data' => null
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
        'amount' => 'amount',
        'totalCount' => 'totalCount',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'totalCount' => 'setTotalCount',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'totalCount' => 'getTotalCount',
        'data' => 'getData'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount 返金総額
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount 返金回数
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \Elepay\Model\RefundDto[]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Elepay\Model\RefundDto[]|null $data 返金詳細情報
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


