# BasalamSDK\FileApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkDeleteFileApiV2FilesDelete()**](FileApi.md#bulkDeleteFileApiV2FilesDelete) | **DELETE** /api_v2/files | Bulk Delete File |
| [**deleteFileApiV2FilesIdDelete()**](FileApi.md#deleteFileApiV2FilesIdDelete) | **DELETE** /api_v2/files/{id} | Delete File |


## `bulkDeleteFileApiV2FilesDelete()`

```php
bulkDeleteFileApiV2FilesDelete($service_secret, $bulk_delete_file_schema): mixed
```

Bulk Delete File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_secret = 'service_secret_example'; // string
$bulk_delete_file_schema = new \BasalamSDK\Model\BulkDeleteFileSchema(); // \BasalamSDK\Model\BulkDeleteFileSchema

try {
    $result = $apiInstance->bulkDeleteFileApiV2FilesDelete($service_secret, $bulk_delete_file_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->bulkDeleteFileApiV2FilesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_secret** | **string**|  | |
| **bulk_delete_file_schema** | [**\BasalamSDK\Model\BulkDeleteFileSchema**](../Model/BulkDeleteFileSchema.md)|  | |

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

## `deleteFileApiV2FilesIdDelete()`

```php
deleteFileApiV2FilesIdDelete($id, $service_secret, $type): mixed
```

Delete File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$service_secret = 'service_secret_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->deleteFileApiV2FilesIdDelete($id, $service_secret, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFileApiV2FilesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **service_secret** | **string**|  | |
| **type** | **string**|  | [optional] |

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
