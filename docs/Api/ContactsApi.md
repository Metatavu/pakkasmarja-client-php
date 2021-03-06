# Metatavu\Pakkasmarja\ContactsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findContact**](ContactsApi.md#findContact) | **GET** /contacts/{id} | Find contact
[**listContacts**](ContactsApi.md#listContacts) | **GET** /contacts | Lists contacts
[**updateContact**](ContactsApi.md#updateContact) | **PUT** /contacts/{id} | Update contact
[**updateContactCredentials**](ContactsApi.md#updateContactCredentials) | **PUT** /contacts/{id}/credentials | Update contact credentials


# **findContact**
> \Metatavu\Pakkasmarja\Api\Model\Contact findContact($id)

Find contact

Finds contact by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Metatavu\Pakkasmarja\Api\ContactsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | contact id

try {
    $result = $api_instance->findContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->findContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| contact id |

### Return type

[**\Metatavu\Pakkasmarja\Api\Model\Contact**](../Model/Contact.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContacts**
> \Metatavu\Pakkasmarja\Api\Model\Contact[] listContacts($search)

Lists contacts

Lists contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Metatavu\Pakkasmarja\Api\ContactsApi(new \Http\Adapter\Guzzle6\Client());
$search = "search_example"; // string | filter results by free text search

try {
    $result = $api_instance->listContacts($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| filter results by free text search | [optional]

### Return type

[**\Metatavu\Pakkasmarja\Api\Model\Contact[]**](../Model/Contact.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \Metatavu\Pakkasmarja\Api\Model\Contact updateContact($id, $body)

Update contact

Updates single contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Metatavu\Pakkasmarja\Api\ContactsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | contact id
$body = new \Metatavu\Pakkasmarja\Api\Model\Contact(); // \Metatavu\Pakkasmarja\Api\Model\Contact | Payload

try {
    $result = $api_instance->updateContact($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| contact id |
 **body** | [**\Metatavu\Pakkasmarja\Api\Model\Contact**](../Model/Contact.md)| Payload |

### Return type

[**\Metatavu\Pakkasmarja\Api\Model\Contact**](../Model/Contact.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactCredentials**
> updateContactCredentials($id, $body)

Update contact credentials

Updates single contact credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Metatavu\Pakkasmarja\Api\ContactsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | contact id
$body = new \Metatavu\Pakkasmarja\Api\Model\Credentials(); // \Metatavu\Pakkasmarja\Api\Model\Credentials | Payload

try {
    $api_instance->updateContactCredentials($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContactCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| contact id |
 **body** | [**\Metatavu\Pakkasmarja\Api\Model\Credentials**](../Model/Credentials.md)| Payload |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

