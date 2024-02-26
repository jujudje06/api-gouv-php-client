# ApiGouv\Client\CommunesApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gpuMunicipalityGet**](CommunesApi.md#gpuMunicipalityGet) | **GET** /gpu/municipality | Récupération des informations sur une commune (est au RNU? est supprimée?)


# **gpuMunicipalityGet**
> \ApiGouv\Client\Model\FeatureCollection gpuMunicipalityGet($geom, $insee)

Récupération des informations sur une commune (est au RNU? est supprimée?)

Retourne un résultat de Type \"FeatureCollection\" avec des communes correspondant aux paramètres

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\CommunesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$insee = "insee_example"; // string | Code insee de la commune

try {
    $result = $apiInstance->gpuMunicipalityGet($geom, $insee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunesApi->gpuMunicipalityGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **insee** | **string**| Code insee de la commune | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

