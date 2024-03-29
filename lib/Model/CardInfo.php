<?php
/**
 * CardInfo
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

use \ArrayAccess;
use \Elepay\ObjectSerializer;

/**
 * CardInfo Class Doc Comment
 *
 * @category Class
 * @description カード情報やウォレット情報
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CardInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brand' => '\Elepay\Model\CardBrandType',
        'last4' => 'string',
        'expMonth' => 'int',
        'expYear' => 'int',
        'name' => 'string',
        'wallet' => 'string',
        'threeDSecure' => 'bool',
        'threeDSecureVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brand' => null,
        'last4' => null,
        'expMonth' => null,
        'expYear' => null,
        'name' => null,
        'wallet' => null,
        'threeDSecure' => null,
        'threeDSecureVersion' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'brand' => false,
		'last4' => false,
		'expMonth' => false,
		'expYear' => false,
		'name' => false,
		'wallet' => false,
		'threeDSecure' => false,
		'threeDSecureVersion' => false
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
        'brand' => 'brand',
        'last4' => 'last4',
        'expMonth' => 'expMonth',
        'expYear' => 'expYear',
        'name' => 'name',
        'wallet' => 'wallet',
        'threeDSecure' => 'threeDSecure',
        'threeDSecureVersion' => 'threeDSecureVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand' => 'setBrand',
        'last4' => 'setLast4',
        'expMonth' => 'setExpMonth',
        'expYear' => 'setExpYear',
        'name' => 'setName',
        'wallet' => 'setWallet',
        'threeDSecure' => 'setThreeDSecure',
        'threeDSecureVersion' => 'setThreeDSecureVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand' => 'getBrand',
        'last4' => 'getLast4',
        'expMonth' => 'getExpMonth',
        'expYear' => 'getExpYear',
        'name' => 'getName',
        'wallet' => 'getWallet',
        'threeDSecure' => 'getThreeDSecure',
        'threeDSecureVersion' => 'getThreeDSecureVersion'
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
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('last4', $data ?? [], null);
        $this->setIfExists('expMonth', $data ?? [], null);
        $this->setIfExists('expYear', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('wallet', $data ?? [], null);
        $this->setIfExists('threeDSecure', $data ?? [], null);
        $this->setIfExists('threeDSecureVersion', $data ?? [], null);
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
     * Gets brand
     *
     * @return \Elepay\Model\CardBrandType|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param \Elepay\Model\CardBrandType|null $brand brand
     *
     * @return self
     */
    public function setBrand($brand)
    {

        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }

        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets last4
     *
     * @return string|null
     */
    public function getLast4()
    {
        return $this->container['last4'];
    }

    /**
     * Sets last4
     *
     * @param string|null $last4 カード番号の下四桁
     *
     * @return self
     */
    public function setLast4($last4)
    {

        if (is_null($last4)) {
            throw new \InvalidArgumentException('non-nullable last4 cannot be null');
        }

        $this->container['last4'] = $last4;

        return $this;
    }

    /**
     * Gets expMonth
     *
     * @return int|null
     */
    public function getExpMonth()
    {
        return $this->container['expMonth'];
    }

    /**
     * Sets expMonth
     *
     * @param int|null $expMonth 有効期限月
     *
     * @return self
     */
    public function setExpMonth($expMonth)
    {

        if (is_null($expMonth)) {
            throw new \InvalidArgumentException('non-nullable expMonth cannot be null');
        }

        $this->container['expMonth'] = $expMonth;

        return $this;
    }

    /**
     * Gets expYear
     *
     * @return int|null
     */
    public function getExpYear()
    {
        return $this->container['expYear'];
    }

    /**
     * Sets expYear
     *
     * @param int|null $expYear 有効期限年
     *
     * @return self
     */
    public function setExpYear($expYear)
    {

        if (is_null($expYear)) {
            throw new \InvalidArgumentException('non-nullable expYear cannot be null');
        }

        $this->container['expYear'] = $expYear;

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
     * @param string|null $name カード保有者名
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
     * Gets wallet
     *
     * @return string|null
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param string|null $wallet ウォレット情報
     *
     * @return self
     */
    public function setWallet($wallet)
    {

        if (is_null($wallet)) {
            throw new \InvalidArgumentException('non-nullable wallet cannot be null');
        }

        $this->container['wallet'] = $wallet;

        return $this;
    }

    /**
     * Gets threeDSecure
     *
     * @return bool|null
     */
    public function getThreeDSecure()
    {
        return $this->container['threeDSecure'];
    }

    /**
     * Sets threeDSecure
     *
     * @param bool|null $threeDSecure 3Dセキュア有無
     *
     * @return self
     */
    public function setThreeDSecure($threeDSecure)
    {

        if (is_null($threeDSecure)) {
            throw new \InvalidArgumentException('non-nullable threeDSecure cannot be null');
        }

        $this->container['threeDSecure'] = $threeDSecure;

        return $this;
    }

    /**
     * Gets threeDSecureVersion
     *
     * @return string|null
     */
    public function getThreeDSecureVersion()
    {
        return $this->container['threeDSecureVersion'];
    }

    /**
     * Sets threeDSecureVersion
     *
     * @param string|null $threeDSecureVersion 3Dセキュアバージョン
     *
     * @return self
     */
    public function setThreeDSecureVersion($threeDSecureVersion)
    {

        if (is_null($threeDSecureVersion)) {
            throw new \InvalidArgumentException('non-nullable threeDSecureVersion cannot be null');
        }

        $this->container['threeDSecureVersion'] = $threeDSecureVersion;

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


