# ApiGouv\Client\SUPApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gpuActeSupGet**](SUPApi.md#gpuActeSupGet) | **GET** /gpu/acte-sup | Récupération des actes des servitudes d’utilité publique
[**gpuAssietteSupLGet**](SUPApi.md#gpuAssietteSupLGet) | **GET** /gpu/assiette-sup-l | Récupération des assiettes linéaires de servitudes d’utilité publique
[**gpuAssietteSupPGet**](SUPApi.md#gpuAssietteSupPGet) | **GET** /gpu/assiette-sup-p | Récupération des assiettes ponctuelles de servitudes d’utilité publique
[**gpuAssietteSupSGet**](SUPApi.md#gpuAssietteSupSGet) | **GET** /gpu/assiette-sup-s | Récupération des assiettes surfaciques de servitudes d’utilité publique
[**gpuGenerateurSupLGet**](SUPApi.md#gpuGenerateurSupLGet) | **GET** /gpu/generateur-sup-l | Récupération des générateurs linéaires des servitudes d’utilité publique
[**gpuGenerateurSupPGet**](SUPApi.md#gpuGenerateurSupPGet) | **GET** /gpu/generateur-sup-p | Récupération des générateurs ponctuels des servitudes d’utilité publique
[**gpuGenerateurSupSGet**](SUPApi.md#gpuGenerateurSupSGet) | **GET** /gpu/generateur-sup-s | Récupération des générateurs surfaciques des servitudes d’utilité publique


# **gpuActeSupGet**
> \ApiGouv\Client\Model\FeatureCollection gpuActeSupGet($partition)

Récupération des actes des servitudes d’utilité publique

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\SUPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partition = "partition_example"; // string | Partition GPU du document

try {
    $result = $apiInstance->gpuActeSupGet($partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPApi->gpuActeSupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partition** | **string**| Partition GPU du document | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuAssietteSupLGet**
> \ApiGouv\Client\Model\FeatureCollection gpuAssietteSupLGet($geom, $partition, $categorie)

Récupération des assiettes linéaires de servitudes d’utilité publique

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\SUPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document
$categorie = "categorie_example"; // string | Categorie

try {
    $result = $apiInstance->gpuAssietteSupLGet($geom, $partition, $categorie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPApi->gpuAssietteSupLGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document | [optional]
 **categorie** | **string**| Categorie | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuAssietteSupPGet**
> \ApiGouv\Client\Model\FeatureCollection gpuAssietteSupPGet($geom, $partition, $categorie)

Récupération des assiettes ponctuelles de servitudes d’utilité publique

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\SUPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document
$categorie = "categorie_example"; // string | Categorie

try {
    $result = $apiInstance->gpuAssietteSupPGet($geom, $partition, $categorie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPApi->gpuAssietteSupPGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document | [optional]
 **categorie** | **string**| Categorie | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuAssietteSupSGet**
> \ApiGouv\Client\Model\FeatureCollection gpuAssietteSupSGet($geom, $partition, $categorie)

Récupération des assiettes surfaciques de servitudes d’utilité publique

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\SUPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document
$categorie = "categorie_example"; // string | Categorie

try {
    $result = $apiInstance->gpuAssietteSupSGet($geom, $partition, $categorie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPApi->gpuAssietteSupSGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document | [optional]
 **categorie** | **string**| Categorie | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuGenerateurSupLGet**
> \ApiGouv\Client\Model\FeatureCollection gpuGenerateurSupLGet($geom, $partition, $categorie)

Récupération des générateurs linéaires des servitudes d’utilité publique

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\SUPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format
$categorie = "categorie_example"; // string | Categorie

try {
    $result = $apiInstance->gpuGenerateurSupLGet($geom, $partition, $categorie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPApi->gpuGenerateurSupLGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format | [optional]
 **categorie** | **string**| Categorie | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuGenerateurSupPGet**
> \ApiGouv\Client\Model\FeatureCollection gpuGenerateurSupPGet($geom, $partition, $categorie)

Récupération des générateurs ponctuels des servitudes d’utilité publique

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\SUPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>
$categorie = "categorie_example"; // string | Categorie

try {
    $result = $apiInstance->gpuGenerateurSupPGet($geom, $partition, $categorie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPApi->gpuGenerateurSupPGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]
 **categorie** | **string**| Categorie | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuGenerateurSupSGet**
> \ApiGouv\Client\Model\FeatureCollection gpuGenerateurSupSGet($geom, $partition, $categorie)

Récupération des générateurs surfaciques des servitudes d’utilité publique

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\SUPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document
$categorie = "categorie_example"; // string | Categorie

try {
    $result = $apiInstance->gpuGenerateurSupSGet($geom, $partition, $categorie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPApi->gpuGenerateurSupSGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document | [optional]
 **categorie** | **string**| Categorie | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

