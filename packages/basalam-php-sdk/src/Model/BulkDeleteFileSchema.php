<?php
/**
 * BulkDeleteFileSchema
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
 * BulkDeleteFileSchema Class Doc Comment
 *
 * @category Class
 * @package  BasalamSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BulkDeleteFileSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BulkDeleteFileSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_type' => 'string',
        'ids' => 'int[]',
        'excluded_ids' => 'int[]',
        'ids_gt' => 'int',
        'ids_lt' => 'int',
        'created_at_gt' => 'string',
        'created_at_lt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'file_type' => null,
        'ids' => null,
        'excluded_ids' => null,
        'ids_gt' => null,
        'ids_lt' => null,
        'created_at_gt' => null,
        'created_at_lt' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'file_type' => false,
        'ids' => false,
        'excluded_ids' => false,
        'ids_gt' => false,
        'ids_lt' => false,
        'created_at_gt' => false,
        'created_at_lt' => false
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
        'file_type' => 'file_type',
        'ids' => 'ids',
        'excluded_ids' => 'excluded_ids',
        'ids_gt' => 'ids_gt',
        'ids_lt' => 'ids_lt',
        'created_at_gt' => 'created_at_gt',
        'created_at_lt' => 'created_at_lt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_type' => 'setFileType',
        'ids' => 'setIds',
        'excluded_ids' => 'setExcludedIds',
        'ids_gt' => 'setIdsGt',
        'ids_lt' => 'setIdsLt',
        'created_at_gt' => 'setCreatedAtGt',
        'created_at_lt' => 'setCreatedAtLt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_type' => 'getFileType',
        'ids' => 'getIds',
        'excluded_ids' => 'getExcludedIds',
        'ids_gt' => 'getIdsGt',
        'ids_lt' => 'getIdsLt',
        'created_at_gt' => 'getCreatedAtGt',
        'created_at_lt' => 'getCreatedAtLt'
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
        $this->setIfExists('file_type', $data ?? [], null);
        $this->setIfExists('ids', $data ?? [], null);
        $this->setIfExists('excluded_ids', $data ?? [], null);
        $this->setIfExists('ids_gt', $data ?? [], null);
        $this->setIfExists('ids_lt', $data ?? [], null);
        $this->setIfExists('created_at_gt', $data ?? [], null);
        $this->setIfExists('created_at_lt', $data ?? [], null);
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

        if ($this->container['file_type'] === null) {
            $invalidProperties[] = "'file_type' can't be null";
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
     * Gets file_type
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     *
     * @param string $file_type file_type
     *
     * @return self
     */
    public function setFileType($file_type)
    {
        if (is_null($file_type)) {
            throw new \InvalidArgumentException('non-nullable file_type cannot be null');
        }
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return int[]|null
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param int[]|null $ids ids
     *
     * @return self
     */
    public function setIds($ids)
    {
        if (is_null($ids)) {
            throw new \InvalidArgumentException('non-nullable ids cannot be null');
        }
        $this->container['ids'] = $ids;

        return $this;
    }

    /**
     * Gets excluded_ids
     *
     * @return int[]|null
     */
    public function getExcludedIds()
    {
        return $this->container['excluded_ids'];
    }

    /**
     * Sets excluded_ids
     *
     * @param int[]|null $excluded_ids excluded_ids
     *
     * @return self
     */
    public function setExcludedIds($excluded_ids)
    {
        if (is_null($excluded_ids)) {
            throw new \InvalidArgumentException('non-nullable excluded_ids cannot be null');
        }
        $this->container['excluded_ids'] = $excluded_ids;

        return $this;
    }

    /**
     * Gets ids_gt
     *
     * @return int|null
     */
    public function getIdsGt()
    {
        return $this->container['ids_gt'];
    }

    /**
     * Sets ids_gt
     *
     * @param int|null $ids_gt ids_gt
     *
     * @return self
     */
    public function setIdsGt($ids_gt)
    {
        if (is_null($ids_gt)) {
            throw new \InvalidArgumentException('non-nullable ids_gt cannot be null');
        }
        $this->container['ids_gt'] = $ids_gt;

        return $this;
    }

    /**
     * Gets ids_lt
     *
     * @return int|null
     */
    public function getIdsLt()
    {
        return $this->container['ids_lt'];
    }

    /**
     * Sets ids_lt
     *
     * @param int|null $ids_lt ids_lt
     *
     * @return self
     */
    public function setIdsLt($ids_lt)
    {
        if (is_null($ids_lt)) {
            throw new \InvalidArgumentException('non-nullable ids_lt cannot be null');
        }
        $this->container['ids_lt'] = $ids_lt;

        return $this;
    }

    /**
     * Gets created_at_gt
     *
     * @return string|null
     */
    public function getCreatedAtGt()
    {
        return $this->container['created_at_gt'];
    }

    /**
     * Sets created_at_gt
     *
     * @param string|null $created_at_gt created_at_gt
     *
     * @return self
     */
    public function setCreatedAtGt($created_at_gt)
    {
        if (is_null($created_at_gt)) {
            throw new \InvalidArgumentException('non-nullable created_at_gt cannot be null');
        }
        $this->container['created_at_gt'] = $created_at_gt;

        return $this;
    }

    /**
     * Gets created_at_lt
     *
     * @return string|null
     */
    public function getCreatedAtLt()
    {
        return $this->container['created_at_lt'];
    }

    /**
     * Sets created_at_lt
     *
     * @param string|null $created_at_lt created_at_lt
     *
     * @return self
     */
    public function setCreatedAtLt($created_at_lt)
    {
        if (is_null($created_at_lt)) {
            throw new \InvalidArgumentException('non-nullable created_at_lt cannot be null');
        }
        $this->container['created_at_lt'] = $created_at_lt;

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


