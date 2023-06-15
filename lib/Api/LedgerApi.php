<?php
/**
 * LedgerApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Numary\Ledger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ledger API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1.9.4-beta.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Numary\Ledger\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Numary\Ledger\ApiException;
use Numary\Ledger\Configuration;
use Numary\Ledger\HeaderSelector;
use Numary\Ledger\ObjectSerializer;

/**
 * LedgerApi Class Doc Comment
 *
 * @category Class
 * @package  Numary\Ledger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LedgerApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getLedgerInfo' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getLedgerInfo
     *
     * Get information about a ledger
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLedgerInfo'] to see the possible values for this operation
     *
     * @throws \Numary\Ledger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Numary\Ledger\Model\LedgerInfoResponse|\Numary\Ledger\Model\ErrorResponse
     */
    public function getLedgerInfo($ledger, string $contentType = self::contentTypes['getLedgerInfo'][0])
    {
        list($response) = $this->getLedgerInfoWithHttpInfo($ledger, $contentType);
        return $response;
    }

    /**
     * Operation getLedgerInfoWithHttpInfo
     *
     * Get information about a ledger
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLedgerInfo'] to see the possible values for this operation
     *
     * @throws \Numary\Ledger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Numary\Ledger\Model\LedgerInfoResponse|\Numary\Ledger\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLedgerInfoWithHttpInfo($ledger, string $contentType = self::contentTypes['getLedgerInfo'][0])
    {
        $request = $this->getLedgerInfoRequest($ledger, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Numary\Ledger\Model\LedgerInfoResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Numary\Ledger\Model\LedgerInfoResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Numary\Ledger\Model\LedgerInfoResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Numary\Ledger\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Numary\Ledger\Model\ErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Numary\Ledger\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Numary\Ledger\Model\LedgerInfoResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Numary\Ledger\Model\LedgerInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Numary\Ledger\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLedgerInfoAsync
     *
     * Get information about a ledger
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLedgerInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLedgerInfoAsync($ledger, string $contentType = self::contentTypes['getLedgerInfo'][0])
    {
        return $this->getLedgerInfoAsyncWithHttpInfo($ledger, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLedgerInfoAsyncWithHttpInfo
     *
     * Get information about a ledger
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLedgerInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLedgerInfoAsyncWithHttpInfo($ledger, string $contentType = self::contentTypes['getLedgerInfo'][0])
    {
        $returnType = '\Numary\Ledger\Model\LedgerInfoResponse';
        $request = $this->getLedgerInfoRequest($ledger, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getLedgerInfo'
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLedgerInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLedgerInfoRequest($ledger, string $contentType = self::contentTypes['getLedgerInfo'][0])
    {

        // verify the required parameter 'ledger' is set
        if ($ledger === null || (is_array($ledger) && count($ledger) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ledger when calling getLedgerInfo'
            );
        }


        $resourcePath = '/{ledger}/_info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($ledger !== null) {
            $resourcePath = str_replace(
                '{' . 'ledger' . '}',
                ObjectSerializer::toPathValue($ledger),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json; charset=utf-8', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
