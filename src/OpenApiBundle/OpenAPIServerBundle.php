<?php
/**
 * OpenAPIServerBundle
 *
 * PHP version 7.1.3
 *
 * @category Class
 * @package  App\OpenApiBundle
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Swagger Petstore
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace App\OpenApiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use App\OpenApiBundle\DependencyInjection\Compiler\OpenAPIServerApiPass;

/**
 * OpenAPIServerBundle Class Doc Comment
 *
 * @category Class
 * @package  App\OpenApiBundle
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class OpenAPIServerBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new OpenAPIServerApiPass());
    }
}