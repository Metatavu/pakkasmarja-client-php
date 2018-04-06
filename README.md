# pakkasmarja-client-php
REST API for Pakkasmarja

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.3
- Package version: 0.0.17
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
*ContactsApi* | [**updateContactCredentials**](docs/Api/ContactsApi.md#updatecontactcredentials) | **PUT** /contacts/{id}/credentials | Update contact credentials
*ContractsApi* | [**createContract**](docs/Api/ContractsApi.md#createcontract) | **POST** /contracts | Create contract
*ContractsApi* | [**createContractDocumentSignRequest**](docs/Api/ContractsApi.md#createcontractdocumentsignrequest) | **POST** /contracts/{id}/documents/{type}/signRequests | Requests contract document electronic signing
*ContractsApi* | [**createContractDocumentTemplate**](docs/Api/ContractsApi.md#createcontractdocumenttemplate) | **POST** /contracts/{contractId}/documentTemplates | Create contract document template
*ContractsApi* | [**findContract**](docs/Api/ContractsApi.md#findcontract) | **GET** /contracts/{id} | Find contract
*ContractsApi* | [**findContractDocumentTemplate**](docs/Api/ContractsApi.md#findcontractdocumenttemplate) | **GET** /contracts/{contractId}/documentTemplates/{contractDocumentTemplateId} | Find contract document template
*ContractsApi* | [**getContractDocument**](docs/Api/ContractsApi.md#getcontractdocument) | **GET** /contracts/{id}/documents/{type} | Returns contract document
*ContractsApi* | [**listContractDocumentTemplates**](docs/Api/ContractsApi.md#listcontractdocumenttemplates) | **GET** /contracts/{contractId}/documentTemplates | List contract document templates
*ContractsApi* | [**listContractPrices**](docs/Api/ContractsApi.md#listcontractprices) | **GET** /contracts/{contractId}/prices | List contract prices
*ContractsApi* | [**listContracts**](docs/Api/ContractsApi.md#listcontracts) | **GET** /contracts | Lists contracts
*ContractsApi* | [**updateContract**](docs/Api/ContractsApi.md#updatecontract) | **PUT** /contracts/{id} | Update contract
*ContractsApi* | [**updateContractDocumentTemplate**](docs/Api/ContractsApi.md#updatecontractdocumenttemplate) | **PUT** /contracts/{contractId}/documentTemplates/{contractDocumentTemplateId} | Updates contract document template
*DeliveryPlacesApi* | [**findDeliveryPlace**](docs/Api/DeliveryPlacesApi.md#finddeliveryplace) | **GET** /deliveryPlaces/{id} | Find delivery place
*DeliveryPlacesApi* | [**listDeliveryPlaces**](docs/Api/DeliveryPlacesApi.md#listdeliveryplaces) | **GET** /deliveryPlaces | Lists delivery places
*ItemGroupsApi* | [**createItemGroupPrice**](docs/Api/ItemGroupsApi.md#createitemgroupprice) | **POST** /itemGroups/{itemGroupId}/prices | Creates item group price
*ItemGroupsApi* | [**findItemGroup**](docs/Api/ItemGroupsApi.md#finditemgroup) | **GET** /itemGroups/{id} | Find item group
*ItemGroupsApi* | [**findItemGroupDocumentTemplate**](docs/Api/ItemGroupsApi.md#finditemgroupdocumenttemplate) | **GET** /itemGroups/{itemGroupId}/documentTemplates/{id} | Find item group document template
*ItemGroupsApi* | [**findItemGroupPrice**](docs/Api/ItemGroupsApi.md#finditemgroupprice) | **GET** /itemGroups/{itemGroupId}/prices/{priceId} | Find item group price
*ItemGroupsApi* | [**listItemGroupDocumentTemplates**](docs/Api/ItemGroupsApi.md#listitemgroupdocumenttemplates) | **GET** /itemGroups/{itemGroupId}/documentTemplates | List item group document templates
*ItemGroupsApi* | [**listItemGroupPrices**](docs/Api/ItemGroupsApi.md#listitemgroupprices) | **GET** /itemGroups/{itemGroupId}/prices | List item group prices
*ItemGroupsApi* | [**listItemGroups**](docs/Api/ItemGroupsApi.md#listitemgroups) | **GET** /itemGroups | Lists item groups
*ItemGroupsApi* | [**updateItemGroupDocumentTemplate**](docs/Api/ItemGroupsApi.md#updateitemgroupdocumenttemplate) | **PUT** /itemGroups/{itemGroupId}/documentTemplates/{id} | Updates item group document template
*ItemGroupsApi* | [**updateItemGroupPrice**](docs/Api/ItemGroupsApi.md#updateitemgroupprice) | **PUT** /itemGroups/{itemGroupId}/prices/{priceId} | Update item group price
*OperationReportsApi* | [**findOperationReport**](docs/Api/OperationReportsApi.md#findoperationreport) | **GET** /operationReports/{id} | Find operation report
*OperationReportsApi* | [**listOperationReportItems**](docs/Api/OperationReportsApi.md#listoperationreportitems) | **GET** /operationReports/{id}/items | List operation report items
*OperationReportsApi* | [**listOperationReports**](docs/Api/OperationReportsApi.md#listoperationreports) | **GET** /operationReports | List operation reports
*OperationsApi* | [**createOperation**](docs/Api/OperationsApi.md#createoperation) | **POST** /operations | Creates new operation
*SignAuthenticationServicesApi* | [**listSignAuthenticationServices**](docs/Api/SignAuthenticationServicesApi.md#listsignauthenticationservices) | **GET** /signAuthenticationServices | List sign authentication services


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AreaDetail](docs/Model/AreaDetail.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [Contact](docs/Model/Contact.md)
 - [Contract](docs/Model/Contract.md)
 - [ContractDocumentSignRequest](docs/Model/ContractDocumentSignRequest.md)
 - [ContractDocumentTemplate](docs/Model/ContractDocumentTemplate.md)
 - [Credentials](docs/Model/Credentials.md)
 - [DeliveryPlace](docs/Model/DeliveryPlace.md)
 - [Forbidden](docs/Model/Forbidden.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [ItemGroup](docs/Model/ItemGroup.md)
 - [ItemGroupDocumentTemplate](docs/Model/ItemGroupDocumentTemplate.md)
 - [NotFound](docs/Model/NotFound.md)
 - [NotImplemented](docs/Model/NotImplemented.md)
 - [Operation](docs/Model/Operation.md)
 - [OperationReport](docs/Model/OperationReport.md)
 - [OperationReportItem](docs/Model/OperationReportItem.md)
 - [Price](docs/Model/Price.md)
 - [SignAuthenticationService](docs/Model/SignAuthenticationService.md)


## Documentation For Authorization


## bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




