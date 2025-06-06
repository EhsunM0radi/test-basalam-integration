<?php
/**
 * ApiSchemasProductProductSchemaMinimalProductSchema
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  BasalamSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * basalam
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BasalamSDK\Model;

use \ArrayAccess;
use \BasalamSDK\ObjectSerializer;

/**
 * ApiSchemasProductProductSchemaMinimalProductSchema Class Doc Comment
 *
 * @category Class
 * @package  BasalamSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiSchemasProductProductSchemaMinimalProductSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'api__schemas__product__product_schema__MinimalProductSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'price' => 'int',
        'order' => 'int',
        'stock' => 'int',
        'status' => 'int',
        'preparation_days' => 'int',
        'variants' => '\BasalamSDK\Model\ApiSchemasProductProductSchemaMinimalProductVariants[]',
        'product_attribute' => '\BasalamSDK\Model\ProductAttributes[]',
        'packaging_dimensions' => '\BasalamSDK\Model\ProductDimensionsSchema'
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
        'name' => null,
        'price' => null,
        'order' => null,
        'stock' => null,
        'status' => null,
        'preparation_days' => null,
        'variants' => null,
        'product_attribute' => null,
        'packaging_dimensions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => true,
        'price' => true,
        'order' => true,
        'stock' => true,
        'status' => true,
        'preparation_days' => true,
        'variants' => true,
        'product_attribute' => true,
        'packaging_dimensions' => true
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
        'name' => 'name',
        'price' => 'price',
        'order' => 'order',
        'stock' => 'stock',
        'status' => 'status',
        'preparation_days' => 'preparation_days',
        'variants' => 'variants',
        'product_attribute' => 'product_attribute',
        'packaging_dimensions' => 'packaging_dimensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'price' => 'setPrice',
        'order' => 'setOrder',
        'stock' => 'setStock',
        'status' => 'setStatus',
        'preparation_days' => 'setPreparationDays',
        'variants' => 'setVariants',
        'product_attribute' => 'setProductAttribute',
        'packaging_dimensions' => 'setPackagingDimensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'price' => 'getPrice',
        'order' => 'getOrder',
        'stock' => 'getStock',
        'status' => 'getStatus',
        'preparation_days' => 'getPreparationDays',
        'variants' => 'getVariants',
        'product_attribute' => 'getProductAttribute',
        'packaging_dimensions' => 'getPackagingDimensions'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('stock', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('preparation_days', $data ?? [], null);
        $this->setIfExists('variants', $data ?? [], null);
        $this->setIfExists('product_attribute', $data ?? [], null);
        $this->setIfExists('packaging_dimensions', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
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
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            array_push($this->openAPINullablesSetToNull, 'price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            array_push($this->openAPINullablesSetToNull, 'order');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return int|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param int|null $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        if (is_null($stock)) {
            array_push($this->openAPINullablesSetToNull, 'stock');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stock', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets preparation_days
     *
     * @return int|null
     */
    public function getPreparationDays()
    {
        return $this->container['preparation_days'];
    }

    /**
     * Sets preparation_days
     *
     * @param int|null $preparation_days preparation_days
     *
     * @return self
     */
    public function setPreparationDays($preparation_days)
    {
        if (is_null($preparation_days)) {
            array_push($this->openAPINullablesSetToNull, 'preparation_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preparation_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['preparation_days'] = $preparation_days;

        return $this;
    }

    /**
     * Gets variants
     *
     * @return \BasalamSDK\Model\ApiSchemasProductProductSchemaMinimalProductVariants[]|null
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \BasalamSDK\Model\ApiSchemasProductProductSchemaMinimalProductVariants[]|null $variants variants
     *
     * @return self
     */
    public function setVariants($variants)
    {
        if (is_null($variants)) {
            array_push($this->openAPINullablesSetToNull, 'variants');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('variants', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['variants'] = $variants;

        return $this;
    }

    /**
     * Gets product_attribute
     *
     * @return \BasalamSDK\Model\ProductAttributes[]|null
     */
    public function getProductAttribute()
    {
        return $this->container['product_attribute'];
    }

    /**
     * Sets product_attribute
     *
     * @param \BasalamSDK\Model\ProductAttributes[]|null $product_attribute product_attribute
     *
     * @return self
     */
    public function setProductAttribute($product_attribute)
    {
        if (is_null($product_attribute)) {
            array_push($this->openAPINullablesSetToNull, 'product_attribute');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_attribute', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product_attribute'] = $product_attribute;

        return $this;
    }

    /**
     * Gets packaging_dimensions
     *
     * @return \BasalamSDK\Model\ProductDimensionsSchema|null
     */
    public function getPackagingDimensions()
    {
        return $this->container['packaging_dimensions'];
    }

    /**
     * Sets packaging_dimensions
     *
     * @param \BasalamSDK\Model\ProductDimensionsSchema|null $packaging_dimensions packaging_dimensions
     *
     * @return self
     */
    public function setPackagingDimensions($packaging_dimensions)
    {
        if (is_null($packaging_dimensions)) {
            array_push($this->openAPINullablesSetToNull, 'packaging_dimensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('packaging_dimensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['packaging_dimensions'] = $packaging_dimensions;

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


