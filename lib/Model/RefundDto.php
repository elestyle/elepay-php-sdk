<?php
/**
 * RefundDto
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

use \ArrayAccess;
use \Elepay\ObjectSerializer;

/**
 * RefundDto Class Doc Comment
 *
 * @category Class
 * @description 返金オブジェクト
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RefundDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'object' => 'string',
        'chargeId' => 'string',
        'liveMode' => 'bool',
        'amount' => 'int',
        'currency' => 'string',
        'metadata' => 'map[string,string]',
        'reason' => 'string',
        'status' => '\Elepay\Model\RefundStatusType',
        'refundedTime' => 'int',
        'createTime' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'object' => null,
        'chargeId' => null,
        'liveMode' => null,
        'amount' => null,
        'currency' => null,
        'metadata' => null,
        'reason' => null,
        'status' => null,
        'refundedTime' => 'int64',
        'createTime' => 'int64'
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
        'id' => 'id',
        'object' => 'object',
        'chargeId' => 'chargeId',
        'liveMode' => 'liveMode',
        'amount' => 'amount',
        'currency' => 'currency',
        'metadata' => 'metadata',
        'reason' => 'reason',
        'status' => 'status',
        'refundedTime' => 'refundedTime',
        'createTime' => 'createTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object' => 'setObject',
        'chargeId' => 'setChargeId',
        'liveMode' => 'setLiveMode',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'metadata' => 'setMetadata',
        'reason' => 'setReason',
        'status' => 'setStatus',
        'refundedTime' => 'setRefundedTime',
        'createTime' => 'setCreateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object' => 'getObject',
        'chargeId' => 'getChargeId',
        'liveMode' => 'getLiveMode',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'metadata' => 'getMetadata',
        'reason' => 'getReason',
        'status' => 'getStatus',
        'refundedTime' => 'getRefundedTime',
        'createTime' => 'getCreateTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : 'refund';
        $this->container['chargeId'] = isset($data['chargeId']) ? $data['chargeId'] : null;
        $this->container['liveMode'] = isset($data['liveMode']) ? $data['liveMode'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['refundedTime'] = isset($data['refundedTime']) ? $data['refundedTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Refund ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string|null $object 対象種類の表記
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets chargeId
     *
     * @return string|null
     */
    public function getChargeId()
    {
        return $this->container['chargeId'];
    }

    /**
     * Sets chargeId
     *
     * @param string|null $chargeId Charge ID
     *
     * @return $this
     */
    public function setChargeId($chargeId)
    {
        $this->container['chargeId'] = $chargeId;

        return $this;
    }

    /**
     * Gets liveMode
     *
     * @return bool|null
     */
    public function getLiveMode()
    {
        return $this->container['liveMode'];
    }

    /**
     * Sets liveMode
     *
     * @param bool|null $liveMode 本番モードかどうか - false テストモード - true 本番モード
     *
     * @return $this
     */
    public function setLiveMode($liveMode)
    {
        $this->container['liveMode'] = $liveMode;

        return $this;
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
     * @param int|null $amount 返金金額。全額返金、及び amount を指定することで金額の部分返金を行うことができます。
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency 通貨コード (ISO_4217)
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string]|null $metadata 返金メタデータ
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason 返金理由
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Elepay\Model\RefundStatusType|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Elepay\Model\RefundStatusType|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets refundedTime
     *
     * @return int|null
     */
    public function getRefundedTime()
    {
        return $this->container['refundedTime'];
    }

    /**
     * Sets refundedTime
     *
     * @param int|null $refundedTime 返金を行う時間のUTCタイムスタンプ。
     *
     * @return $this
     */
    public function setRefundedTime($refundedTime)
    {
        $this->container['refundedTime'] = $refundedTime;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param int|null $createTime 返金新規時間のUTCタイムスタンプ。
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

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


