# ApiGouv\Client\DocumentsDurbanismePLUPOSCCPSMVApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gpuDocumentGet**](DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuDocumentGet) | **GET** /gpu/document | Récupération de l&#39;emprise d&#39;un document
[**gpuInfoLinGet**](DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuInfoLinGet) | **GET** /gpu/info-lin | Récupération des informations linéaires d’un document d’urbanisme
[**gpuInfoPctGet**](DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuInfoPctGet) | **GET** /gpu/info-pct | Récupération des informations ponctuelles d’un document d’urbanisme
[**gpuInfoSurfGet**](DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuInfoSurfGet) | **GET** /gpu/info-surf | Récupération des informations surfaciques d’un document d’urbanisme
[**gpuPrescriptionLinGet**](DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuPrescriptionLinGet) | **GET** /gpu/prescription-lin | Récupération des prescriptions linéaires d’un document d’urbanisme
[**gpuPrescriptionPctGet**](DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuPrescriptionPctGet) | **GET** /gpu/prescription-pct | Récupération des prescriptions ponctuelles d’un document d’urbanisme
[**gpuPrescriptionSurfGet**](DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuPrescriptionSurfGet) | **GET** /gpu/prescription-surf | Récupération des prescriptions surfaciques d’un document d’urbanisme
[**gpuSecteurCcGet**](DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuSecteurCcGet) | **GET** /gpu/secteur-cc | Récupération des secteurs d’une carte communale
[**gpuZoneUrbaGet**](DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuZoneUrbaGet) | **GET** /gpu/zone-urba | Récupération des zonages d’un document d’urbanisme


# **gpuDocumentGet**
> \ApiGouv\Client\Model\FeatureCollection gpuDocumentGet($geom, $partition)

Récupération de l'emprise d'un document

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec l'emprise d'un document qui intersecte la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\DocumentsDurbanismePLUPOSCCPSMVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>

try {
    $result = $apiInstance->gpuDocumentGet($geom, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsDurbanismePLUPOSCCPSMVApi->gpuDocumentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuInfoLinGet**
> \ApiGouv\Client\Model\FeatureCollection gpuInfoLinGet($geom, $partition)

Récupération des informations linéaires d’un document d’urbanisme

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\DocumentsDurbanismePLUPOSCCPSMVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>

try {
    $result = $apiInstance->gpuInfoLinGet($geom, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsDurbanismePLUPOSCCPSMVApi->gpuInfoLinGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuInfoPctGet**
> \ApiGouv\Client\Model\FeatureCollection gpuInfoPctGet($geom, $partition)

Récupération des informations ponctuelles d’un document d’urbanisme

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\DocumentsDurbanismePLUPOSCCPSMVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>

try {
    $result = $apiInstance->gpuInfoPctGet($geom, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsDurbanismePLUPOSCCPSMVApi->gpuInfoPctGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuInfoSurfGet**
> \ApiGouv\Client\Model\FeatureCollection gpuInfoSurfGet($geom, $partition)

Récupération des informations surfaciques d’un document d’urbanisme

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\DocumentsDurbanismePLUPOSCCPSMVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>

try {
    $result = $apiInstance->gpuInfoSurfGet($geom, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsDurbanismePLUPOSCCPSMVApi->gpuInfoSurfGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuPrescriptionLinGet**
> \ApiGouv\Client\Model\FeatureCollection gpuPrescriptionLinGet($geom, $partition)

Récupération des prescriptions linéaires d’un document d’urbanisme

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\DocumentsDurbanismePLUPOSCCPSMVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>

try {
    $result = $apiInstance->gpuPrescriptionLinGet($geom, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsDurbanismePLUPOSCCPSMVApi->gpuPrescriptionLinGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuPrescriptionPctGet**
> \ApiGouv\Client\Model\FeatureCollection gpuPrescriptionPctGet($geom, $partition)

Récupération des prescriptions ponctuelles d’un document d’urbanisme

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\DocumentsDurbanismePLUPOSCCPSMVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>

try {
    $result = $apiInstance->gpuPrescriptionPctGet($geom, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsDurbanismePLUPOSCCPSMVApi->gpuPrescriptionPctGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuPrescriptionSurfGet**
> \ApiGouv\Client\Model\FeatureCollection gpuPrescriptionSurfGet($geom, $partition)

Récupération des prescriptions surfaciques d’un document d’urbanisme

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\DocumentsDurbanismePLUPOSCCPSMVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>

try {
    $result = $apiInstance->gpuPrescriptionSurfGet($geom, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsDurbanismePLUPOSCCPSMVApi->gpuPrescriptionSurfGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuSecteurCcGet**
> \ApiGouv\Client\Model\FeatureCollection gpuSecteurCcGet($geom, $partition)

Récupération des secteurs d’une carte communale

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\DocumentsDurbanismePLUPOSCCPSMVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>

try {
    $result = $apiInstance->gpuSecteurCcGet($geom, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsDurbanismePLUPOSCCPSMVApi->gpuSecteurCcGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gpuZoneUrbaGet**
> \ApiGouv\Client\Model\FeatureCollection gpuZoneUrbaGet($geom, $partition)

Récupération des zonages d’un document d’urbanisme

Prend en entrée une géométrie au format JSON et retourne une featureCollection. Retourne un résultat de Type \"FeatureCollection\" avec les informations qui intersectent la géométrie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ApiGouv\Client\Api\DocumentsDurbanismePLUPOSCCPSMVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geom = "geom_example"; // string | Géométrie GeoJSON utilisée pour la recherche
$partition = "partition_example"; // string | Partition GPU du document au format <DU/PSMV>_<INSEE/SIREN>

try {
    $result = $apiInstance->gpuZoneUrbaGet($geom, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsDurbanismePLUPOSCCPSMVApi->gpuZoneUrbaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geom** | **string**| Géométrie GeoJSON utilisée pour la recherche | [optional]
 **partition** | **string**| Partition GPU du document au format &lt;DU/PSMV&gt;_&lt;INSEE/SIREN&gt; | [optional]

### Return type

[**\ApiGouv\Client\Model\FeatureCollection**](../Model/FeatureCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

