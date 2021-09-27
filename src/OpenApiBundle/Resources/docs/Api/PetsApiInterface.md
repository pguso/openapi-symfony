# App\OpenApiBundle\Api\PetsApiInterface

All URIs are relative to *http://petstore.swagger.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPets**](PetsApiInterface.md#createPets) | **POST** /pets | Create a pet
[**listPets**](PetsApiInterface.md#listPets) | **GET** /pets | List all pets
[**showPetById**](PetsApiInterface.md#showPetById) | **GET** /pets/{petId} | Info for a specific pet


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.pets:
        class: Acme\MyBundle\Api\PetsApi
        tags:
            - { name: "open_api_server.api", api: "pets" }
    # ...
```

## **createPets**
> createPets()

Create a pet

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetsApiInterface.php

namespace Acme\MyBundle\Api;

use App\OpenApiBundle\Api\PetsApiInterface;

class PetsApi implements PetsApiInterface
{

    // ...

    /**
     * Implementation of PetsApiInterface#createPets
     */
    public function createPets()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **listPets**
> App\OpenApiBundle\Model\Pet listPets($limit)

List all pets

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetsApiInterface.php

namespace Acme\MyBundle\Api;

use App\OpenApiBundle\Api\PetsApiInterface;

class PetsApi implements PetsApiInterface
{

    // ...

    /**
     * Implementation of PetsApiInterface#listPets
     */
    public function listPets($limit = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many items to return at one time (max 100) | [optional]

### Return type

[**App\OpenApiBundle\Model\Pet**](../Model/Pet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **showPetById**
> App\OpenApiBundle\Model\Pet showPetById($petId)

Info for a specific pet

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PetsApiInterface.php

namespace Acme\MyBundle\Api;

use App\OpenApiBundle\Api\PetsApiInterface;

class PetsApi implements PetsApiInterface
{

    // ...

    /**
     * Implementation of PetsApiInterface#showPetById
     */
    public function showPetById($petId)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **string**| The id of the pet to retrieve |

### Return type

[**App\OpenApiBundle\Model\Pet**](../Model/Pet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

