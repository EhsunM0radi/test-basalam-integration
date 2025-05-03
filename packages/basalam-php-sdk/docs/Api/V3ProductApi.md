# BasalamSDK\V3ProductApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**readProductsListV3ProductsGet()**](V3ProductApi.md#readProductsListV3ProductsGet) | **GET** /v3/products | Read Products List |


## `readProductsListV3ProductsGet()`

```php
readProductsListV3ProductsGet($ids, $vendor_ids, $price, $product_title, $vendor_title, $vendor_mobile, $category_id, $status, $created_at, $page, $per_page, $sort, $prefer): mixed
```

Read Products List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\V3ProductApi(
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
    echo 'Exception when calling V3ProductApi->readProductsListV3ProductsGet: ', $e->getMessage(), PHP_EOL;
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
