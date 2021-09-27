# OpenAPIServer
No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

This [Symfony](https://symfony.com/) bundle is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpSymfonyServerCodegen

## Requirements

PHP 7.1.3 and later

## Installation & Usage

To install the dependencies via [Composer](http://getcomposer.org/), add the following repository to `composer.json` of your Symfony project:

```json
{
    "repositories": [{
        "type": "path",
        "url": "//Path to your generated openapi bundle"
    }],
}
```

Then run:

```
composer require GIT_USER_ID/GIT_REPO_ID:dev-master
```

to add the generated openapi bundle as a dependency.

## Tests

To run the unit tests for the generated bundle, first navigate to the directory containing the code, then run the following commands:

```
composer install
./vendor/bin/phpunit
```


## Getting Started

Step 1: Please follow the [installation procedure](#installation--usage) first.

Step 2: Enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new App\OpenApiBundle\OpenAPIServerBundle(),
        // ...
    );
}
```

Step 3: Register the routes:

```yaml
# app/config/routing.yml
open_api_server:
    resource: "@OpenAPIServerBundle/Resources/config/routing.yml"
```

Step 4: Implement the API calls:

```php
<?php
// src/Acme/MyBundle/Api/PetsApiInterface.php

namespace Acme\MyBundle\Api;

use App\OpenApiBundle\Api\PetsApiInterface;

class PetsApi implements PetsApiInterface // An interface is autogenerated
{

    // Other operation methods ...
}
```

Step 5: Tag your API implementation:

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

Now you can start using the bundle!


## Documentation for API Endpoints

All URIs are relative to *http://petstore.swagger.io/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PetsApiInterface* | [**createPets**](Resources/docs/Api/PetsApiInterface.md#createpets) | **POST** /pets | Create a pet
*PetsApiInterface* | [**listPets**](Resources/docs/Api/PetsApiInterface.md#listpets) | **GET** /pets | List all pets
*PetsApiInterface* | [**showPetById**](Resources/docs/Api/PetsApiInterface.md#showpetbyid) | **GET** /pets/{petId} | Info for a specific pet


## Documentation For Models

 - [Error](Resources/docs/Model/Error.md)
 - [Pet](Resources/docs/Model/Pet.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author



