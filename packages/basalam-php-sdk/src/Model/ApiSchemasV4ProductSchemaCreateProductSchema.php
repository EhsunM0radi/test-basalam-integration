<?php
/**
 * ApiSchemasV4ProductSchemaCreateProductSchema
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
 * ApiSchemasV4ProductSchemaCreateProductSchema Class Doc Comment
 *
 * @category Class
 * @package  BasalamSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiSchemasV4ProductSchemaCreateProductSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'api__schemas__v4__product_schema__CreateProductSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'photo' => 'int',
        'photos' => 'int[]',
        'video' => 'int',
        'brief' => 'string',
        'description' => 'string',
        'order' => 'int',
        'category_id' => 'int',
        'status' => 'int',
        'preparation_days' => 'int',
        'keywords' => 'string[]',
        'weight' => 'float',
        'package_weight' => 'int',
        'primary_price' => 'int',
        'stock' => 'int',
        'shipping_city_ids' => 'int[]',
        'shipping_method_ids' => 'int[]',
        'product_attribute' => '\BasalamSDK\Model\ProductAttributes[]',
        'virtual' => 'bool',
        'variants' => '\BasalamSDK\Model\ApiSchemasV4ProductSchemaProductVariants[]',
        'shipping_data' => '\BasalamSDK\Model\ProductShippingData',
        'unit_quantity' => 'float',
        'unit_type' => 'int',
        'sku' => 'string',
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
        'name' => null,
        'photo' => null,
        'photos' => null,
        'video' => null,
        'brief' => null,
        'description' => null,
        'order' => null,
        'category_id' => null,
        'status' => null,
        'preparation_days' => null,
        'keywords' => null,
        'weight' => null,
        'package_weight' => null,
        'primary_price' => null,
        'stock' => null,
        'shipping_city_ids' => null,
        'shipping_method_ids' => null,
        'product_attribute' => null,
        'virtual' => null,
        'variants' => null,
        'shipping_data' => null,
        'unit_quantity' => null,
        'unit_type' => null,
        'sku' => null,
        'packaging_dimensions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'photo' => true,
        'photos' => true,
        'video' => true,
        'brief' => true,
        'description' => true,
        'order' => true,
        'category_id' => false,
        'status' => false,
        'preparation_days' => false,
        'keywords' => true,
        'weight' => true,
        'package_weight' => false,
        'primary_price' => true,
        'stock' => true,
        'shipping_city_ids' => true,
        'shipping_method_ids' => true,
        'product_attribute' => true,
        'virtual' => true,
        'variants' => true,
        'shipping_data' => true,
        'unit_quantity' => true,
        'unit_type' => true,
        'sku' => true,
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
        'name' => 'name',
        'photo' => 'photo',
        'photos' => 'photos',
        'video' => 'video',
        'brief' => 'brief',
        'description' => 'description',
        'order' => 'order',
        'category_id' => 'category_id',
        'status' => 'status',
        'preparation_days' => 'preparation_days',
        'keywords' => 'keywords',
        'weight' => 'weight',
        'package_weight' => 'package_weight',
        'primary_price' => 'primary_price',
        'stock' => 'stock',
        'shipping_city_ids' => 'shipping_city_ids',
        'shipping_method_ids' => 'shipping_method_ids',
        'product_attribute' => 'product_attribute',
        'virtual' => 'virtual',
        'variants' => 'variants',
        'shipping_data' => 'shipping_data',
        'unit_quantity' => 'unit_quantity',
        'unit_type' => 'unit_type',
        'sku' => 'sku',
        'packaging_dimensions' => 'packaging_dimensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'photo' => 'setPhoto',
        'photos' => 'setPhotos',
        'video' => 'setVideo',
        'brief' => 'setBrief',
        'description' => 'setDescription',
        'order' => 'setOrder',
        'category_id' => 'setCategoryId',
        'status' => 'setStatus',
        'preparation_days' => 'setPreparationDays',
        'keywords' => 'setKeywords',
        'weight' => 'setWeight',
        'package_weight' => 'setPackageWeight',
        'primary_price' => 'setPrimaryPrice',
        'stock' => 'setStock',
        'shipping_city_ids' => 'setShippingCityIds',
        'shipping_method_ids' => 'setShippingMethodIds',
        'product_attribute' => 'setProductAttribute',
        'virtual' => 'setVirtual',
        'variants' => 'setVariants',
        'shipping_data' => 'setShippingData',
        'unit_quantity' => 'setUnitQuantity',
        'unit_type' => 'setUnitType',
        'sku' => 'setSku',
        'packaging_dimensions' => 'setPackagingDimensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'photo' => 'getPhoto',
        'photos' => 'getPhotos',
        'video' => 'getVideo',
        'brief' => 'getBrief',
        'description' => 'getDescription',
        'order' => 'getOrder',
        'category_id' => 'getCategoryId',
        'status' => 'getStatus',
        'preparation_days' => 'getPreparationDays',
        'keywords' => 'getKeywords',
        'weight' => 'getWeight',
        'package_weight' => 'getPackageWeight',
        'primary_price' => 'getPrimaryPrice',
        'stock' => 'getStock',
        'shipping_city_ids' => 'getShippingCityIds',
        'shipping_method_ids' => 'getShippingMethodIds',
        'product_attribute' => 'getProductAttribute',
        'virtual' => 'getVirtual',
        'variants' => 'getVariants',
        'shipping_data' => 'getShippingData',
        'unit_quantity' => 'getUnitQuantity',
        'unit_type' => 'getUnitType',
        'sku' => 'getSku',
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('photo', $data ?? [], null);
        $this->setIfExists('photos', $data ?? [], null);
        $this->setIfExists('video', $data ?? [], null);
        $this->setIfExists('brief', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('preparation_days', $data ?? [], null);
        $this->setIfExists('keywords', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('package_weight', $data ?? [], null);
        $this->setIfExists('primary_price', $data ?? [], null);
        $this->setIfExists('stock', $data ?? [], null);
        $this->setIfExists('shipping_city_ids', $data ?? [], null);
        $this->setIfExists('shipping_method_ids', $data ?? [], null);
        $this->setIfExists('product_attribute', $data ?? [], null);
        $this->setIfExists('virtual', $data ?? [], null);
        $this->setIfExists('variants', $data ?? [], null);
        $this->setIfExists('shipping_data', $data ?? [], null);
        $this->setIfExists('unit_quantity', $data ?? [], null);
        $this->setIfExists('unit_type', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category_id'] === null) {
            $invalidProperties[] = "'category_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['preparation_days'] === null) {
            $invalidProperties[] = "'preparation_days' can't be null";
        }
        if ($this->container['package_weight'] === null) {
            $invalidProperties[] = "'package_weight' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
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
     * Gets photo
     *
     * @return int|null
     */
    public function getPhoto()
    {
        return $this->container['photo'];
    }

    /**
     * Sets photo
     *
     * @param int|null $photo photo
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        if (is_null($photo)) {
            array_push($this->openAPINullablesSetToNull, 'photo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('photo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['photo'] = $photo;

        return $this;
    }

    /**
     * Gets photos
     *
     * @return int[]|null
     */
    public function getPhotos()
    {
        return $this->container['photos'];
    }

    /**
     * Sets photos
     *
     * @param int[]|null $photos photos
     *
     * @return self
     */
    public function setPhotos($photos)
    {
        if (is_null($photos)) {
            array_push($this->openAPINullablesSetToNull, 'photos');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('photos', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['photos'] = $photos;

        return $this;
    }

    /**
     * Gets video
     *
     * @return int|null
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param int|null $video video
     *
     * @return self
     */
    public function setVideo($video)
    {
        if (is_null($video)) {
            array_push($this->openAPINullablesSetToNull, 'video');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets brief
     *
     * @return string|null
     */
    public function getBrief()
    {
        return $this->container['brief'];
    }

    /**
     * Sets brief
     *
     * @param string|null $brief brief
     *
     * @return self
     */
    public function setBrief($brief)
    {
        if (is_null($brief)) {
            array_push($this->openAPINullablesSetToNull, 'brief');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brief', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['brief'] = $brief;

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
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

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
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id category_id
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        if (is_null($category_id)) {
            throw new \InvalidArgumentException('non-nullable category_id cannot be null');
        }
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status status
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
     * Gets preparation_days
     *
     * @return int
     */
    public function getPreparationDays()
    {
        return $this->container['preparation_days'];
    }

    /**
     * Sets preparation_days
     *
     * @param int $preparation_days preparation_days
     *
     * @return self
     */
    public function setPreparationDays($preparation_days)
    {
        if (is_null($preparation_days)) {
            throw new \InvalidArgumentException('non-nullable preparation_days cannot be null');
        }
        $this->container['preparation_days'] = $preparation_days;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[]|null $keywords keywords
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        if (is_null($keywords)) {
            array_push($this->openAPINullablesSetToNull, 'keywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('keywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            array_push($this->openAPINullablesSetToNull, 'weight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('weight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets package_weight
     *
     * @return int
     */
    public function getPackageWeight()
    {
        return $this->container['package_weight'];
    }

    /**
     * Sets package_weight
     *
     * @param int $package_weight package_weight
     *
     * @return self
     */
    public function setPackageWeight($package_weight)
    {
        if (is_null($package_weight)) {
            throw new \InvalidArgumentException('non-nullable package_weight cannot be null');
        }
        $this->container['package_weight'] = $package_weight;

        return $this;
    }

    /**
     * Gets primary_price
     *
     * @return int|null
     */
    public function getPrimaryPrice()
    {
        return $this->container['primary_price'];
    }

    /**
     * Sets primary_price
     *
     * @param int|null $primary_price primary_price
     *
     * @return self
     */
    public function setPrimaryPrice($primary_price)
    {
        if (is_null($primary_price)) {
            array_push($this->openAPINullablesSetToNull, 'primary_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('primary_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['primary_price'] = $primary_price;

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
     * Gets shipping_city_ids
     *
     * @return int[]|null
     */
    public function getShippingCityIds()
    {
        return $this->container['shipping_city_ids'];
    }

    /**
     * Sets shipping_city_ids
     *
     * @param int[]|null $shipping_city_ids shipping_city_ids
     *
     * @return self
     */
    public function setShippingCityIds($shipping_city_ids)
    {
        if (is_null($shipping_city_ids)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_city_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_city_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_city_ids'] = $shipping_city_ids;

        return $this;
    }

    /**
     * Gets shipping_method_ids
     *
     * @return int[]|null
     */
    public function getShippingMethodIds()
    {
        return $this->container['shipping_method_ids'];
    }

    /**
     * Sets shipping_method_ids
     *
     * @param int[]|null $shipping_method_ids shipping_method_ids
     *
     * @return self
     */
    public function setShippingMethodIds($shipping_method_ids)
    {
        if (is_null($shipping_method_ids)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_method_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_method_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_method_ids'] = $shipping_method_ids;

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
     * Gets virtual
     *
     * @return bool|null
     */
    public function getVirtual()
    {
        return $this->container['virtual'];
    }

    /**
     * Sets virtual
     *
     * @param bool|null $virtual virtual
     *
     * @return self
     */
    public function setVirtual($virtual)
    {
        if (is_null($virtual)) {
            array_push($this->openAPINullablesSetToNull, 'virtual');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('virtual', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['virtual'] = $virtual;

        return $this;
    }

    /**
     * Gets variants
     *
     * @return \BasalamSDK\Model\ApiSchemasV4ProductSchemaProductVariants[]|null
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \BasalamSDK\Model\ApiSchemasV4ProductSchemaProductVariants[]|null $variants variants
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
     * Gets shipping_data
     *
     * @return \BasalamSDK\Model\ProductShippingData|null
     */
    public function getShippingData()
    {
        return $this->container['shipping_data'];
    }

    /**
     * Sets shipping_data
     *
     * @param \BasalamSDK\Model\ProductShippingData|null $shipping_data shipping_data
     *
     * @return self
     */
    public function setShippingData($shipping_data)
    {
        if (is_null($shipping_data)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_data'] = $shipping_data;

        return $this;
    }

    /**
     * Gets unit_quantity
     *
     * @return float|null
     */
    public function getUnitQuantity()
    {
        return $this->container['unit_quantity'];
    }

    /**
     * Sets unit_quantity
     *
     * @param float|null $unit_quantity unit_quantity
     *
     * @return self
     */
    public function setUnitQuantity($unit_quantity)
    {
        if (is_null($unit_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'unit_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unit_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unit_quantity'] = $unit_quantity;

        return $this;
    }

    /**
     * Gets unit_type
     *
     * @return int|null
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /**
     * Sets unit_type
     *
     * @param int|null $unit_type unit_type
     *
     * @return self
     */
    public function setUnitType($unit_type)
    {
        if (is_null($unit_type)) {
            array_push($this->openAPINullablesSetToNull, 'unit_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unit_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unit_type'] = $unit_type;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            array_push($this->openAPINullablesSetToNull, 'sku');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sku', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sku'] = $sku;

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


