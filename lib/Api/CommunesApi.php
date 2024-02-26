<?php
/**
 * CommunesApi
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
 * Do not edit the class manually.
 */

namespace ApiGouv\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ApiGouv\Client\ApiException;
use ApiGouv\Client\Configuration;
use ApiGouv\Client\HeaderSelector;
use ApiGouv\Client\ObjectSerializer;

/**
 * CommunesApi Class Doc Comment
 *
 * @category Class
 * @package  ApiGouv\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommunesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation gpuMunicipalityGet
     *
     * Récupération des informations sur une commune (est au RNU? est supprimée?)
     *
     * @param  string $geom Géométrie GeoJSON utilisée pour la recherche (optional)
     * @param  string $insee Code insee de la commune (optional)
     *
     * @throws \ApiGouv\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ApiGouv\Client\Model\FeatureCollection
     */
    public function gpuMunicipalityGet($geom = null, $insee = null)
    {
        list($response) = $this->gpuMunicipalityGetWithHttpInfo($geom, $insee);
        return $response;
    }

    /**
     * Operation gpuMunicipalityGetWithHttpInfo
     *
     * Récupération des informations sur une commune (est au RNU? est supprimée?)
     *
     * @param  string $geom Géométrie GeoJSON utilisée pour la recherche (optional)
     * @param  string $insee Code insee de la commune (optional)
     *
     * @throws \ApiGouv\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ApiGouv\Client\Model\FeatureCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function gpuMunicipalityGetWithHttpInfo($geom = null, $insee = null)
    {
        $returnType = '\ApiGouv\Client\Model\FeatureCollection';
        $request = $this->gpuMunicipalityGetRequest($geom, $insee);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ApiGouv\Client\Model\FeatureCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation gpuMunicipalityGetAsync
     *
     * Récupération des informations sur une commune (est au RNU? est supprimée?)
     *
     * @param  string $geom Géométrie GeoJSON utilisée pour la recherche (optional)
     * @param  string $insee Code insee de la commune (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gpuMunicipalityGetAsync($geom = null, $insee = null)
    {
        return $this->gpuMunicipalityGetAsyncWithHttpInfo($geom, $insee)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation gpuMunicipalityGetAsyncWithHttpInfo
     *
     * Récupération des informations sur une commune (est au RNU? est supprimée?)
     *
     * @param  string $geom Géométrie GeoJSON utilisée pour la recherche (optional)
     * @param  string $insee Code insee de la commune (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gpuMunicipalityGetAsyncWithHttpInfo($geom = null, $insee = null)
    {
        $returnType = '\ApiGouv\Client\Model\FeatureCollection';
        $request = $this->gpuMunicipalityGetRequest($geom, $insee);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'gpuMunicipalityGet'
     *
     * @param  string $geom Géométrie GeoJSON utilisée pour la recherche (optional)
     * @param  string $insee Code insee de la commune (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function gpuMunicipalityGetRequest($geom = null, $insee = null)
    {

        $resourcePath = '/gpu/municipality';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($geom !== null) {
            $queryParams['geom'] = ObjectSerializer::toQueryValue($geom);
        }
        // query params
        if ($insee !== null) {
            $queryParams['insee'] = ObjectSerializer::toQueryValue($insee);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}