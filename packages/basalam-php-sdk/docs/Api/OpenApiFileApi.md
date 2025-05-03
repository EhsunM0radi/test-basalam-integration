# BasalamSDK\OpenApiFileApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFileV3FilesPost()**](OpenApiFileApi.md#createFileV3FilesPost) | **POST** /v3/files | Create File |


## `createFileV3FilesPost()`

```php
createFileV3FilesPost($authorization, $file, $file_type, $custom_unique_name, $expire_minutes): \BasalamSDK\Model\FileResponse
```

Create File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\OpenApiFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject
$file_type = new \BasalamSDK\Model\UserUploadFileTypeEnum(); // \BasalamSDK\Model\UserUploadFileTypeEnum
$custom_unique_name = 'custom_unique_name_example'; // string
$expire_minutes = 56; // int

try {
    $result = $apiInstance->createFileV3FilesPost($authorization, $file, $file_type, $custom_unique_name, $expire_minutes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenApiFileApi->createFileV3FilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **file_type** | [**\BasalamSDK\Model\UserUploadFileTypeEnum**](../Model/UserUploadFileTypeEnum.md)|  | |
| **custom_unique_name** | **string**|  | [optional] |
| **expire_minutes** | **int**|  | [optional] |

### Return type

[**\BasalamSDK\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
