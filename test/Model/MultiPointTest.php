<?php
/**
 * MultiPointTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  ApiGouv\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Module urbanisme (GpU)
 *
 * Le service d’interrogation du GPU permet d’obtenir des informations d’urbanisme intersectant une géométrie (ponctuelle ou surfacique).  Attention : les géométries passées en paramètre doivent comporter un nombre de points raisonnable.  Toutes les réponses sont au format GeoJSON et de type FeatureCollection. Toutes les requêtes du module GPU peuvent se faire en POST ou en GET.   Consultez la [documentation utilisateur](https://apicarto.ign.fr/api/doc/pdf/docUser_moduleUrbanisme.pdf) pour plus d’informations sur les paramètres d’appel disponibles et le format des résultats.  Exemple de géométrie: (référentiel EPSG:4326)    * Centre de Rennes:       `{\"type\": \"Point\",\"coordinates\":[-1.691634,48.104237]}`   * Parcelle:         `{\"type\":\"MultiPolygon\",\"coordinates\":[[[[-0.4781433,44.745308],[-0.4782708,44.74523],[-0.4783436,44.7451852],[-0.4783998,44.7451462],[-0.4784414,44.7451099],[-0.4784924,44.7450598],[-0.4785333,44.7450223],[-0.4785783,44.7449774],[-0.4786326,44.7449217],[-0.4786341,44.7449202],[-0.4795499,44.7457302],[-0.4789179,44.7461035],[-0.4781433,44.745308]]]]}`
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.39
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace ApiGouv\Client;

/**
 * MultiPointTest Class Doc Comment
 *
 * @category    Class
 * @description Un &#x60;MultiPoint&#x60; au sens GeoJSON
 * @package     ApiGouv\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MultiPointTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "MultiPoint"
     */
    public function testMultiPoint()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "coordinates"
     */
    public function testPropertyCoordinates()
    {
    }
}
