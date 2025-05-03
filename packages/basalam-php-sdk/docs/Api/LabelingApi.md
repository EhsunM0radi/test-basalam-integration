# BasalamSDK\LabelingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**predictLabelsCategoryDetectionApiV20PredictGet()**](LabelingApi.md#predictLabelsCategoryDetectionApiV20PredictGet) | **GET** /category_detection/api_v2.0/predict/ | Predict Labels |


## `predictLabelsCategoryDetectionApiV20PredictGet()`

```php
predictLabelsCategoryDetectionApiV20PredictGet($title): mixed
```

Predict Labels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BasalamSDK\Api\LabelingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$title = 'title_example'; // string

try {
    $result = $apiInstance->predictLabelsCategoryDetectionApiV20PredictGet($title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelingApi->predictLabelsCategoryDetectionApiV20PredictGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **title** | **string**|  | |

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
