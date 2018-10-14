# Metatavu\Pakkasmarja\ChatThreadsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChatThreadReport**](ChatThreadsApi.md#getChatThreadReport) | **GET** /chatThreads/{threadId}/reports/{type} | Returns chat thread report


# **getChatThreadReport**
> string getChatThreadReport($threadId, $type, $accept)

Returns chat thread report

Returns chat thread report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Metatavu\Pakkasmarja\Api\ChatThreadsApi(new \Http\Adapter\Guzzle6\Client());
$threadId = 789; // int | chat thread id
$type = "type_example"; // string | report type. Accepted values summaryReport
$accept = "accept_example"; // string | Expected response format. Accepted values application/vnd.openxmlformats for Excel response

try {
    $result = $api_instance->getChatThreadReport($threadId, $type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatThreadsApi->getChatThreadReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **threadId** | **int**| chat thread id |
 **type** | **string**| report type. Accepted values summaryReport |
 **accept** | **string**| Expected response format. Accepted values application/vnd.openxmlformats for Excel response | [optional]

### Return type

**string**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

