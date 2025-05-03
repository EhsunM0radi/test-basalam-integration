# BasalamSDK\ProductApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**patchUpdateProductApiV2ProductPatch()**](ProductApi.md#patchUpdateProductApiV2ProductPatch) | **PATCH** /api_v2/product | Patch Update Product |


## `patchUpdateProductApiV2ProductPatch()`

```php
patchUpdateProductApiV2ProductPatch($api_schemas_product_product_schema_minimal_product_schema): mixed
```

Patch Update Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_schemas_product_product_schema_minimal_product_schema = new \BasalamSDK\Model\ApiSchemasProductProductSchemaMinimalProductSchema(); // \BasalamSDK\Model\ApiSchemasProductProductSchemaMinimalProductSchema

try {
    $result = $apiInstance->patchUpdateProductApiV2ProductPatch($api_schemas_product_product_schema_minimal_product_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->patchUpdateProductApiV2ProductPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_schemas_product_product_schema_minimal_product_schema** | [**\BasalamSDK\Model\ApiSchemasProductProductSchemaMinimalProductSchema**](../Model/ApiSchemasProductProductSchemaMinimalProductSchema.md)|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
