# BasalamSDK\V4ProductApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProductV4VendorsVendorIdProductsPost()**](V4ProductApi.md#createProductV4VendorsVendorIdProductsPost) | **POST** /v4/vendors/{vendor_id}/products | Create Product |
| [**patchUpdateProductV4ProductsProductIdPatch()**](V4ProductApi.md#patchUpdateProductV4ProductsProductIdPatch) | **PATCH** /v4/products/{product_id} | Patch Update Product |
| [**patchUpdateProductVariationV4ProductsProductIdVariationsVariationIdPatch()**](V4ProductApi.md#patchUpdateProductVariationV4ProductsProductIdVariationsVariationIdPatch) | **PATCH** /v4/products/{product_id}/variations/{variation_id} | Patch Update Product Variation |
| [**readProductV4ProductsProductIdGet()**](V4ProductApi.md#readProductV4ProductsProductIdGet) | **GET** /v4/products/{product_id} | Read Product |


## `createProductV4VendorsVendorIdProductsPost()`

```php
createProductV4VendorsVendorIdProductsPost($vendor_id, $api_schemas_v4_product_schema_create_product_schema): \BasalamSDK\Model\ReadProductResponse
```

Create Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\V4ProductApi(
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
    echo 'Exception when calling V4ProductApi->createProductV4VendorsVendorIdProductsPost: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new BasalamSDK\Api\V4ProductApi(
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
    echo 'Exception when calling V4ProductApi->patchUpdateProductV4ProductsProductIdPatch: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new BasalamSDK\Api\V4ProductApi(
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
    echo 'Exception when calling V4ProductApi->patchUpdateProductVariationV4ProductsProductIdVariationsVariationIdPatch: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new BasalamSDK\Api\V4ProductApi(
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
    echo 'Exception when calling V4ProductApi->readProductV4ProductsProductIdGet: ', $e->getMessage(), PHP_EOL;
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
