# SwaggerClient-php
Le service d’interrogation du GPU permet d’obtenir des informations d’urbanisme intersectant une géométrie (ponctuelle ou surfacique).  Attention : les géométries passées en paramètre doivent comporter un nombre de points raisonnable.  Toutes les réponses sont au format GeoJSON et de type FeatureCollection. Toutes les requêtes du module GPU peuvent se faire en POST ou en GET.   Consultez la [documentation utilisateur](https://apicarto.ign.fr/api/doc/pdf/docUser_moduleUrbanisme.pdf) pour plus d’informations sur les paramètres d’appel disponibles et le format des résultats.  Exemple de géométrie: (référentiel EPSG:4326)    * Centre de Rennes:       `{\"type\": \"Point\",\"coordinates\":[-1.691634,48.104237]}`   * Parcelle:         `{\"type\":\"MultiPolygon\",\"coordinates\":[[[[-0.4781433,44.745308],[-0.4782708,44.74523],[-0.4783436,44.7451852],[-0.4783998,44.7451462],[-0.4784414,44.7451099],[-0.4784924,44.7450598],[-0.4785333,44.7450223],[-0.4785783,44.7449774],[-0.4786326,44.7449217],[-0.4786341,44.7449202],[-0.4795499,44.7457302],[-0.4789179,44.7461035],[-0.4781433,44.745308]]]]}`

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1
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
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
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

## Documentation for API Endpoints

All URIs are relative to *https://localhost/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommunesApi* | [**gpuMunicipalityGet**](docs/Api/CommunesApi.md#gpumunicipalityget) | **GET** /gpu/municipality | Récupération des informations sur une commune (est au RNU? est supprimée?)
*DocumentsDurbanismePLUPOSCCPSMVApi* | [**gpuDocumentGet**](docs/Api/DocumentsDurbanismePLUPOSCCPSMVApi.md#gpudocumentget) | **GET** /gpu/document | Récupération de l&#39;emprise d&#39;un document
*DocumentsDurbanismePLUPOSCCPSMVApi* | [**gpuInfoLinGet**](docs/Api/DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuinfolinget) | **GET** /gpu/info-lin | Récupération des informations linéaires d’un document d’urbanisme
*DocumentsDurbanismePLUPOSCCPSMVApi* | [**gpuInfoPctGet**](docs/Api/DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuinfopctget) | **GET** /gpu/info-pct | Récupération des informations ponctuelles d’un document d’urbanisme
*DocumentsDurbanismePLUPOSCCPSMVApi* | [**gpuInfoSurfGet**](docs/Api/DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuinfosurfget) | **GET** /gpu/info-surf | Récupération des informations surfaciques d’un document d’urbanisme
*DocumentsDurbanismePLUPOSCCPSMVApi* | [**gpuPrescriptionLinGet**](docs/Api/DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuprescriptionlinget) | **GET** /gpu/prescription-lin | Récupération des prescriptions linéaires d’un document d’urbanisme
*DocumentsDurbanismePLUPOSCCPSMVApi* | [**gpuPrescriptionPctGet**](docs/Api/DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuprescriptionpctget) | **GET** /gpu/prescription-pct | Récupération des prescriptions ponctuelles d’un document d’urbanisme
*DocumentsDurbanismePLUPOSCCPSMVApi* | [**gpuPrescriptionSurfGet**](docs/Api/DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuprescriptionsurfget) | **GET** /gpu/prescription-surf | Récupération des prescriptions surfaciques d’un document d’urbanisme
*DocumentsDurbanismePLUPOSCCPSMVApi* | [**gpuSecteurCcGet**](docs/Api/DocumentsDurbanismePLUPOSCCPSMVApi.md#gpusecteurccget) | **GET** /gpu/secteur-cc | Récupération des secteurs d’une carte communale
*DocumentsDurbanismePLUPOSCCPSMVApi* | [**gpuZoneUrbaGet**](docs/Api/DocumentsDurbanismePLUPOSCCPSMVApi.md#gpuzoneurbaget) | **GET** /gpu/zone-urba | Récupération des zonages d’un document d’urbanisme
*SUPApi* | [**gpuActeSupGet**](docs/Api/SUPApi.md#gpuactesupget) | **GET** /gpu/acte-sup | Récupération des actes des servitudes d’utilité publique
*SUPApi* | [**gpuAssietteSupLGet**](docs/Api/SUPApi.md#gpuassiettesuplget) | **GET** /gpu/assiette-sup-l | Récupération des assiettes linéaires de servitudes d’utilité publique
*SUPApi* | [**gpuAssietteSupPGet**](docs/Api/SUPApi.md#gpuassiettesuppget) | **GET** /gpu/assiette-sup-p | Récupération des assiettes ponctuelles de servitudes d’utilité publique
*SUPApi* | [**gpuAssietteSupSGet**](docs/Api/SUPApi.md#gpuassiettesupsget) | **GET** /gpu/assiette-sup-s | Récupération des assiettes surfaciques de servitudes d’utilité publique
*SUPApi* | [**gpuGenerateurSupLGet**](docs/Api/SUPApi.md#gpugenerateursuplget) | **GET** /gpu/generateur-sup-l | Récupération des générateurs linéaires des servitudes d’utilité publique
*SUPApi* | [**gpuGenerateurSupPGet**](docs/Api/SUPApi.md#gpugenerateursuppget) | **GET** /gpu/generateur-sup-p | Récupération des générateurs ponctuels des servitudes d’utilité publique
*SUPApi* | [**gpuGenerateurSupSGet**](docs/Api/SUPApi.md#gpugenerateursupsget) | **GET** /gpu/generateur-sup-s | Récupération des générateurs surfaciques des servitudes d’utilité publique


## Documentation For Models

 - [Coordinate](docs/Model/Coordinate.md)
 - [Feature](docs/Model/Feature.md)
 - [FeatureCollection](docs/Model/FeatureCollection.md)
 - [Geometry](docs/Model/Geometry.md)
 - [LineString](docs/Model/LineString.md)
 - [MultiLineString](docs/Model/MultiLineString.md)
 - [MultiPoint](docs/Model/MultiPoint.md)
 - [MultiPolygon](docs/Model/MultiPolygon.md)
 - [Point](docs/Model/Point.md)
 - [Polygon](docs/Model/Polygon.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




