# pakkasmarja-client-php
REST API for Pakkasmarja

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.3
- Package version: 0.0.5
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/metatavu/pakkasmarja-client-php.git"
    }
  ],
  "require": {
    "metatavu/pakkasmarja-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/pakkasmarja-client-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Metatavu\Pakkasmarja\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Metatavu\Pakkasmarja\Api\ContactsApi();
$id = "id_example"; // string | contact id

try {
    $result = $api_instance->findContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->findContact: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost/rest/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContactsApi* | [**findContact**](docs/Api/ContactsApi.md#findcontact) | **GET** /contacts/{id} | Find contact
*ContactsApi* | [**listContacts**](docs/Api/ContactsApi.md#listcontacts) | **GET** /contacts | Lists contacts
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /contacts/{id} | Update contact
*ContractsApi* | [**createContractDocumentSignRequest**](docs/Api/ContractsApi.md#createcontractdocumentsignrequest) | **POST** /contracts/{id}/documents/{type}/signRequests | Requests contract document electronic signing
*ContractsApi* | [**findContract**](docs/Api/ContractsApi.md#findcontract) | **GET** /contracts/{id} | Find contract
*ContractsApi* | [**getContractDocument**](docs/Api/ContractsApi.md#getcontractdocument) | **GET** /contracts/{id}/documents/{type} | Returns contract document
*ContractsApi* | [**listContracts**](docs/Api/ContractsApi.md#listcontracts) | **GET** /contracts | Lists contracts
*ContractsApi* | [**updateContract**](docs/Api/ContractsApi.md#updatecontract) | **PUT** /contracts/{id} | Update contract
*ItemGroupsApi* | [**findItemGroup**](docs/Api/ItemGroupsApi.md#finditemgroup) | **GET** /itemGroups/{id} | Find item group
*ItemGroupsApi* | [**listItemGroups**](docs/Api/ItemGroupsApi.md#listitemgroups) | **GET** /itemGroups | Lists itemGroups
*OperationReportsApi* | [**findOperationReport**](docs/Api/OperationReportsApi.md#findoperationreport) | **GET** /operationReports/{id} | Find operation report
*OperationReportsApi* | [**listOperationReportItems**](docs/Api/OperationReportsApi.md#listoperationreportitems) | **GET** /operationReports/{id}/items | List operation report items
*OperationReportsApi* | [**listOperationReports**](docs/Api/OperationReportsApi.md#listoperationreports) | **GET** /operationReports | List operation reports
*OperationsApi* | [**createOperation**](docs/Api/OperationsApi.md#createoperation) | **POST** /operations | Creates new operation


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [Contact](docs/Model/Contact.md)
 - [Contract](docs/Model/Contract.md)
 - [ContractDocumentSignRequest](docs/Model/ContractDocumentSignRequest.md)
 - [Forbidden](docs/Model/Forbidden.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [ItemGroup](docs/Model/ItemGroup.md)
 - [NotFound](docs/Model/NotFound.md)
 - [NotImplemented](docs/Model/NotImplemented.md)
 - [Operation](docs/Model/Operation.md)
 - [OperationReport](docs/Model/OperationReport.md)
 - [OperationReportItem](docs/Model/OperationReportItem.md)


## Documentation For Authorization


## bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




