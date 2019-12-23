<?php
/**
 * ChargeDto
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
 * The version of the OpenAPI document: 1.1.0
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

use \ArrayAccess;
use \Elepay\ObjectSerializer;

/**
 * ChargeDto Class Doc Comment
 *
 * @category Class
 * @description 支払いオブジェクト
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChargeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChargeDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'object' => 'string',
        'liveMode' => 'bool',
        'amount' => 'int',
        'currency' => 'string',
        'paymentMethod' => '\Elepay\Model\PaymentMethodType',
        'resource' => '\Elepay\Model\ResourceType',
        'orderNo' => 'string',
        'description' => 'string',
        'extra' => 'map[string,object]',
        'metadata' => 'map[string,object]',
        'clientIp' => 'string',
        'paid' => 'bool',
        'refunded' => 'bool',
        'refunds' => '\Elepay\Model\RefundsDto',
        'status' => '\Elepay\Model\ChargeStatusType',
        'credential' => 'string',
        'paidTime' => 'int',
        'refundTime' => 'int',
        'expiryTime' => 'int',
        'settleTime' => 'int',
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
        'liveMode' => null,
        'amount' => null,
        'currency' => null,
        'paymentMethod' => null,
        'resource' => null,
        'orderNo' => null,
        'description' => null,
        'extra' => null,
        'metadata' => null,
        'clientIp' => null,
        'paid' => null,
        'refunded' => null,
        'refunds' => null,
        'status' => null,
        'credential' => null,
        'paidTime' => 'int64',
        'refundTime' => 'int64',
        'expiryTime' => 'int64',
        'settleTime' => 'int64',
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
        'liveMode' => 'liveMode',
        'amount' => 'amount',
        'currency' => 'currency',
        'paymentMethod' => 'paymentMethod',
        'resource' => 'resource',
        'orderNo' => 'orderNo',
        'description' => 'description',
        'extra' => 'extra',
        'metadata' => 'metadata',
        'clientIp' => 'clientIp',
        'paid' => 'paid',
        'refunded' => 'refunded',
        'refunds' => 'refunds',
        'status' => 'status',
        'credential' => 'credential',
        'paidTime' => 'paidTime',
        'refundTime' => 'refundTime',
        'expiryTime' => 'expiryTime',
        'settleTime' => 'settleTime',
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
        'liveMode' => 'setLiveMode',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'paymentMethod' => 'setPaymentMethod',
        'resource' => 'setResource',
        'orderNo' => 'setOrderNo',
        'description' => 'setDescription',
        'extra' => 'setExtra',
        'metadata' => 'setMetadata',
        'clientIp' => 'setClientIp',
        'paid' => 'setPaid',
        'refunded' => 'setRefunded',
        'refunds' => 'setRefunds',
        'status' => 'setStatus',
        'credential' => 'setCredential',
        'paidTime' => 'setPaidTime',
        'refundTime' => 'setRefundTime',
        'expiryTime' => 'setExpiryTime',
        'settleTime' => 'setSettleTime',
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
        'liveMode' => 'getLiveMode',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'paymentMethod' => 'getPaymentMethod',
        'resource' => 'getResource',
        'orderNo' => 'getOrderNo',
        'description' => 'getDescription',
        'extra' => 'getExtra',
        'metadata' => 'getMetadata',
        'clientIp' => 'getClientIp',
        'paid' => 'getPaid',
        'refunded' => 'getRefunded',
        'refunds' => 'getRefunds',
        'status' => 'getStatus',
        'credential' => 'getCredential',
        'paidTime' => 'getPaidTime',
        'refundTime' => 'getRefundTime',
        'expiryTime' => 'getExpiryTime',
        'settleTime' => 'getSettleTime',
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : 'charge';
        $this->container['liveMode'] = isset($data['liveMode']) ? $data['liveMode'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : 'JPY';
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['orderNo'] = isset($data['orderNo']) ? $data['orderNo'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : null;
        $this->container['refunded'] = isset($data['refunded']) ? $data['refunded'] : null;
        $this->container['refunds'] = isset($data['refunds']) ? $data['refunds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['credential'] = isset($data['credential']) ? $data['credential'] : null;
        $this->container['paidTime'] = isset($data['paidTime']) ? $data['paidTime'] : null;
        $this->container['refundTime'] = isset($data['refundTime']) ? $data['refundTime'] : null;
        $this->container['expiryTime'] = isset($data['expiryTime']) ? $data['expiryTime'] : null;
        $this->container['settleTime'] = isset($data['settleTime']) ? $data['settleTime'] : null;
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
     * @param string|null $id Charge ID
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
     * @param int|null $amount 支払い金額
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
     * Gets paymentMethod
     *
     * @return \Elepay\Model\PaymentMethodType|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Elepay\Model\PaymentMethodType|null $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return \Elepay\Model\ResourceType|null
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param \Elepay\Model\ResourceType|null $resource resource
     *
     * @return $this
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

        return $this;
    }

    /**
     * Gets orderNo
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param string|null $orderNo お客様システム側のオーダーNo、例えば注文番号、決済IDなど
     *
     * @return $this
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 支払い説明文
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extra
     *
     * @return map[string,object]|null
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param map[string,object]|null $extra 支払いエキストラデータ
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,object]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,object]|null $metadata 支払いメタデータ
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets clientIp
     *
     * @return string|null
     */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
     * Sets clientIp
     *
     * @param string|null $clientIp Client IP アドレス
     *
     * @return $this
     */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return bool|null
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param bool|null $paid 支払い済みフラグ
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return bool|null
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param bool|null $refunded 返金済みフラグ
     *
     * @return $this
     */
    public function setRefunded($refunded)
    {
        $this->container['refunded'] = $refunded;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \Elepay\Model\RefundsDto|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \Elepay\Model\RefundsDto|null $refunds refunds
     *
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Elepay\Model\ChargeStatusType|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Elepay\Model\ChargeStatusType|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets credential
     *
     * @return string|null
     */
    public function getCredential()
    {
        return $this->container['credential'];
    }

    /**
     * Sets credential
     *
     * @param string|null $credential Client SDK の認証情報
     *
     * @return $this
     */
    public function setCredential($credential)
    {
        $this->container['credential'] = $credential;

        return $this;
    }

    /**
     * Gets paidTime
     *
     * @return int|null
     */
    public function getPaidTime()
    {
        return $this->container['paidTime'];
    }

    /**
     * Sets paidTime
     *
     * @param int|null $paidTime 支払い時間のUTCタイムスタンプ
     *
     * @return $this
     */
    public function setPaidTime($paidTime)
    {
        $this->container['paidTime'] = $paidTime;

        return $this;
    }

    /**
     * Gets refundTime
     *
     * @return int|null
     */
    public function getRefundTime()
    {
        return $this->container['refundTime'];
    }

    /**
     * Sets refundTime
     *
     * @param int|null $refundTime 返金時間のUTCタイムスタンプ
     *
     * @return $this
     */
    public function setRefundTime($refundTime)
    {
        $this->container['refundTime'] = $refundTime;

        return $this;
    }

    /**
     * Gets expiryTime
     *
     * @return int|null
     */
    public function getExpiryTime()
    {
        return $this->container['expiryTime'];
    }

    /**
     * Sets expiryTime
     *
     * @param int|null $expiryTime 支払い請求有効時間のUTCタイムスタンプ
     *
     * @return $this
     */
    public function setExpiryTime($expiryTime)
    {
        $this->container['expiryTime'] = $expiryTime;

        return $this;
    }

    /**
     * Gets settleTime
     *
     * @return int|null
     */
    public function getSettleTime()
    {
        return $this->container['settleTime'];
    }

    /**
     * Sets settleTime
     *
     * @param int|null $settleTime 支払い締め時間のUTCタイムスタンプ
     *
     * @return $this
     */
    public function setSettleTime($settleTime)
    {
        $this->container['settleTime'] = $settleTime;

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
     * @param int|null $createTime 支払い新規時間のUTCタイムスタンプ
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

