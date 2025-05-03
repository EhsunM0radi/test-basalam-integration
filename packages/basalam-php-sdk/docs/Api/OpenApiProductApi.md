# BasalamSDK\OpenApiProductApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProductV4VendorsVendorIdProductsPost()**](OpenApiProductApi.md#createProductV4VendorsVendorIdProductsPost) | **POST** /v4/vendors/{vendor_id}/products | Create Product |
| [**patchUpdateProductV4ProductsProductIdPatch()**](OpenApiProductApi.md#patchUpdateProductV4ProductsProductIdPatch) | **PATCH** /v4/products/{product_id} | Patch Update Product |
| [**patchUpdateProductVariationV4ProductsProductIdVariationsVariationIdPatch()**](OpenApiProductApi.md#patchUpdateProductVariationV4ProductsProductIdVariationsVariationIdPatch) | **PATCH** /v4/products/{product_id}/variations/{variation_id} | Patch Update Product Variation |
| [**readProductV4ProductsProductIdGet()**](OpenApiProductApi.md#readProductV4ProductsProductIdGet) | **GET** /v4/products/{product_id} | Read Product |
| [**readProductsListV3ProductsGet()**](OpenApiProductApi.md#readProductsListV3ProductsGet) | **GET** /v3/products | Read Products List |


## `createProductV4VendorsVendorIdProductsPost()`

```php
createProductV4VendorsVendorIdProductsPost($vendor_id, $api_schemas_v4_product_schema_create_product_schema): \BasalamSDK\Model\ReadProductResponse
```

Create Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\OpenApiProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vendor_id = 56; // int
$api_schemas_v4_product_schema_create_product_schema = new \BasalamSDK\Model\ApiSchemasV4ProductSchemaCreateProductSchema(); // \BasalamSDK\Model\ApiSchemasV4ProductSchemaCreateProductSchema

try {
    $result = $apiInstance->createProductV4VendorsVendorIdProductsPost($vendor_id, $api_schemas_v4_product_schema_create_product_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenApiProductApi->createProductV4VendorsVendorIdProductsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vendor_id** | **int**|  | |
| **api_schemas_v4_product_schema_create_product_schema** | [**\BasalamSDK\Model\ApiSchemasV4ProductSchemaCreateProductSchema**](../Model/ApiSchemasV4ProductSchemaCreateProductSchema.md)|  | |

### Return type

[**\BasalamSDK\Model\ReadProductResponse**](../Model/ReadProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUpdateProductV4ProductsProductIdPatch()`

```php
patchUpdateProductV4ProductsProductIdPatch($product_id, $api_schemas_v4_product_schema_patch_update_product_schema): \BasalamSDK\Model\ReadProductResponse
```

Patch Update Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\OpenApiProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 56; // int
$api_schemas_v4_product_schema_patch_update_product_schema = new \BasalamSDK\Model\ApiSchemasV4ProductSchemaPatchUpdateProductSchema(); // \BasalamSDK\Model\ApiSchemasV4ProductSchemaPatchUpdateProductSchema

try {
    $result = $apiInstance->patchUpdateProductV4ProductsProductIdPatch($product_id, $api_schemas_v4_product_schema_patch_update_product_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenApiProductApi->patchUpdateProductV4ProductsProductIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**|  | |
| **api_schemas_v4_product_schema_patch_update_product_schema** | [**\BasalamSDK\Model\ApiSchemasV4ProductSchemaPatchUpdateProductSchema**](../Model/ApiSchemasV4ProductSchemaPatchUpdateProductSchema.md)|  | |

### Return type

[**\BasalamSDK\Model\ReadProductResponse**](../Model/ReadProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUpdateProductVariationV4ProductsProductIdVariationsVariationIdPatch()`

```php
patchUpdateProductVariationV4ProductsProductIdVariationsVariationIdPatch($product_id, $variation_id, $api_schemas_v4_product_schema_update_product_variants_schema): \BasalamSDK\Model\ReadProductResponse
```

Patch Update Product Variation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\OpenApiProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 56; // int
$variation_id = 56; // int
$api_schemas_v4_product_schema_update_product_variants_schema = new \BasalamSDK\Model\ApiSchemasV4ProductSchemaUpdateProductVariantsSchema(); // \BasalamSDK\Model\ApiSchemasV4ProductSchemaUpdateProductVariantsSchema

try {
    $result = $apiInstance->patchUpdateProductVariationV4ProductsProductIdVariationsVariationIdPatch($product_id, $variation_id, $api_schemas_v4_product_schema_update_product_variants_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenApiProductApi->patchUpdateProductVariationV4ProductsProductIdVariationsVariationIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**|  | |
| **variation_id** | **int**|  | |
| **api_schemas_v4_product_schema_update_product_variants_schema** | [**\BasalamSDK\Model\ApiSchemasV4ProductSchemaUpdateProductVariantsSchema**](../Model/ApiSchemasV4ProductSchemaUpdateProductVariantsSchema.md)|  | |

### Return type

[**\BasalamSDK\Model\ReadProductResponse**](../Model/ReadProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readProductV4ProductsProductIdGet()`

```php
readProductV4ProductsProductIdGet($product_id, $prefer): \BasalamSDK\Model\ReadProductResponse
```

Read Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\OpenApiProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 56; // int
$prefer = 'prefer_example'; // string

try {
    $result = $apiInstance->readProductV4ProductsProductIdGet($product_id, $prefer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenApiProductApi->readProductV4ProductsProductIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**|  | |
| **prefer** | **string**|  | [optional] |

### Return type

[**\BasalamSDK\Model\ReadProductResponse**](../Model/ReadProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readProductsListV3ProductsGet()`

```php
readProductsListV3ProductsGet($ids, $vendor_ids, $price, $product_title, $vendor_title, $vendor_mobile, $category_id, $status, $created_at, $page, $per_page, $sort, $prefer): mixed
```

Read Products List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\OpenApiProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = NULL; // mixed[]
$vendor_ids = NULL; // mixed[]
$price = 'price_example'; // string
$product_title = 'product_title_example'; // string
$vendor_title = 'vendor_title_example'; // string
$vendor_mobile = 'vendor_mobile_example'; // string
$category_id = 56; // int
$status = 56; // int
$created_at = 'created_at_example'; // string
$page = 56; // int
$per_page = 56; // int
$sort = 'sort_example'; // string
$prefer = 'prefer_example'; // string

try {
    $result = $apiInstance->readProductsListV3ProductsGet($ids, $vendor_ids, $price, $product_title, $vendor_title, $vendor_mobile, $category_id, $status, $created_at, $page, $per_page, $sort, $prefer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenApiProductApi->readProductsListV3ProductsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**mixed[]**](../Model/mixed.md)|  | [optional] |
| **vendor_ids** | [**mixed[]**](../Model/mixed.md)|  | [optional] |
| **price** | **string**|  | [optional] |
| **product_title** | **string**|  | [optional] |
| **vendor_title** | **string**|  | [optional] |
| **vendor_mobile** | **string**|  | [optional] |
| **category_id** | **int**|  | [optional] |
| **status** | **int**|  | [optional] |
| **created_at** | **string**|  | [optional] |
| **page** | **int**|  | [optional] |
| **per_page** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **prefer** | **string**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
