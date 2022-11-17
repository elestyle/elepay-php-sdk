<?php
/**
 * InvoiceDto
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

use \ArrayAccess;
use \Elepay\ObjectSerializer;

/**
 * InvoiceDto Class Doc Comment
 *
 * @category Class
 * @description インボイスオブジェクト
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InvoiceDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'object' => 'string',
        'liveMode' => 'bool',
        'customer' => '\Elepay\Model\CustomerDto',
        'invoiceNo' => 'string',
        'name' => 'string',
        'memo' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'status' => '\Elepay\Model\InvoiceStatusType',
        'operator' => 'string',
        'sendTime' => 'int',
        'paidTime' => 'int',
        'expiryTime' => 'int',
        'createTime' => 'int',
        'items' => '\Elepay\Model\InvoiceItem[]',
        'remark' => 'string',
        'metadata' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'object' => null,
        'liveMode' => null,
        'customer' => null,
        'invoiceNo' => null,
        'name' => null,
        'memo' => null,
        'amount' => null,
        'currency' => null,
        'status' => null,
        'operator' => null,
        'sendTime' => 'int64',
        'paidTime' => 'int64',
        'expiryTime' => 'int64',
        'createTime' => 'int64',
        'items' => null,
        'remark' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'object' => false,
		'liveMode' => false,
		'customer' => false,
		'invoiceNo' => false,
		'name' => false,
		'memo' => false,
		'amount' => false,
		'currency' => false,
		'status' => false,
		'operator' => false,
		'sendTime' => false,
		'paidTime' => false,
		'expiryTime' => false,
		'createTime' => false,
		'items' => false,
		'remark' => false,
		'metadata' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        'customer' => 'customer',
        'invoiceNo' => 'invoiceNo',
        'name' => 'name',
        'memo' => 'memo',
        'amount' => 'amount',
        'currency' => 'currency',
        'status' => 'status',
        'operator' => 'operator',
        'sendTime' => 'sendTime',
        'paidTime' => 'paidTime',
        'expiryTime' => 'expiryTime',
        'createTime' => 'createTime',
        'items' => 'items',
        'remark' => 'remark',
        'metadata' => 'metadata'
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
        'customer' => 'setCustomer',
        'invoiceNo' => 'setInvoiceNo',
        'name' => 'setName',
        'memo' => 'setMemo',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'status' => 'setStatus',
        'operator' => 'setOperator',
        'sendTime' => 'setSendTime',
        'paidTime' => 'setPaidTime',
        'expiryTime' => 'setExpiryTime',
        'createTime' => 'setCreateTime',
        'items' => 'setItems',
        'remark' => 'setRemark',
        'metadata' => 'setMetadata'
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
        'customer' => 'getCustomer',
        'invoiceNo' => 'getInvoiceNo',
        'name' => 'getName',
        'memo' => 'getMemo',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'status' => 'getStatus',
        'operator' => 'getOperator',
        'sendTime' => 'getSendTime',
        'paidTime' => 'getPaidTime',
        'expiryTime' => 'getExpiryTime',
        'createTime' => 'getCreateTime',
        'items' => 'getItems',
        'remark' => 'getRemark',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'invoice');
        $this->setIfExists('liveMode', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('invoiceNo', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('memo', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], 'JPY');
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
        $this->setIfExists('sendTime', $data ?? [], null);
        $this->setIfExists('paidTime', $data ?? [], null);
        $this->setIfExists('expiryTime', $data ?? [], null);
        $this->setIfExists('createTime', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('remark', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * @param string|null $id Invoice ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

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
     * @return self
     */
    public function setObject($object)
    {

        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }

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
     * @return self
     */
    public function setLiveMode($liveMode)
    {

        if (is_null($liveMode)) {
            throw new \InvalidArgumentException('non-nullable liveMode cannot be null');
        }

        $this->container['liveMode'] = $liveMode;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Elepay\Model\CustomerDto|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Elepay\Model\CustomerDto|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {

        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }

        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets invoiceNo
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
     * Sets invoiceNo
     *
     * @param string|null $invoiceNo Invoice Number
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {

        if (is_null($invoiceNo)) {
            throw new \InvalidArgumentException('non-nullable invoiceNo cannot be null');
        }

        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo memo
     *
     * @return self
     */
    public function setMemo($memo)
    {

        if (is_null($memo)) {
            throw new \InvalidArgumentException('non-nullable memo cannot be null');
        }

        $this->container['memo'] = $memo;

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
     * @param int|null $amount payment amount
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

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
     * @param string|null $currency currency code
     *
     * @return self
     */
    public function setCurrency($currency)
    {

        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Elepay\Model\InvoiceStatusType|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Elepay\Model\InvoiceStatusType|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string|null
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string|null $operator 操作者
     *
     * @return self
     */
    public function setOperator($operator)
    {

        if (is_null($operator)) {
            throw new \InvalidArgumentException('non-nullable operator cannot be null');
        }

        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets sendTime
     *
     * @return int|null
     */
    public function getSendTime()
    {
        return $this->container['sendTime'];
    }

    /**
     * Sets sendTime
     *
     * @param int|null $sendTime create time
     *
     * @return self
     */
    public function setSendTime($sendTime)
    {

        if (is_null($sendTime)) {
            throw new \InvalidArgumentException('non-nullable sendTime cannot be null');
        }

        $this->container['sendTime'] = $sendTime;

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
     * @param int|null $paidTime paid time
     *
     * @return self
     */
    public function setPaidTime($paidTime)
    {

        if (is_null($paidTime)) {
            throw new \InvalidArgumentException('non-nullable paidTime cannot be null');
        }

        $this->container['paidTime'] = $paidTime;

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
     * @param int|null $expiryTime expiry time
     *
     * @return self
     */
    public function setExpiryTime($expiryTime)
    {

        if (is_null($expiryTime)) {
            throw new \InvalidArgumentException('non-nullable expiryTime cannot be null');
        }

        $this->container['expiryTime'] = $expiryTime;

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
     * @param int|null $createTime create time
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {

        if (is_null($createTime)) {
            throw new \InvalidArgumentException('non-nullable createTime cannot be null');
        }

        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Elepay\Model\InvoiceItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Elepay\Model\InvoiceItem[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {

        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }

        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string|null $remark 備考
     *
     * @return self
     */
    public function setRemark($remark)
    {

        if (is_null($remark)) {
            throw new \InvalidArgumentException('non-nullable remark cannot be null');
        }

        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata メタデータ
     *
     * @return self
     */
    public function setMetadata($metadata)
    {

        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }

        $this->container['metadata'] = $metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


