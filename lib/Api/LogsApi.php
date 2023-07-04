<?php
/**
 * LogsApi
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
 * The version of the OpenAPI document: v1.10.3
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
 * LogsApi Class Doc Comment
 *
 * @category Class
 * @package  Numary\Ledger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LogsApi
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
        'listLogs' => [
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
     * Operation listLogs
     *
     * List the logs from a ledger
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  int $page_size The maximum number of results to return per page. (optional, default to 15)
     * @param  int $page_size2 The maximum number of results to return per page. Deprecated, please use &#x60;pageSize&#x60; instead. (optional, default to 15) (deprecated)
     * @param  string $after Pagination cursor, will return the logs after a given ID. (in descending order). (optional)
     * @param  \DateTime $start_time Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). (optional)
     * @param  \DateTime $start_time2 Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). Deprecated, please use &#x60;startTime&#x60; instead. (optional) (deprecated)
     * @param  \DateTime $end_time Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). (optional)
     * @param  \DateTime $end_time2 Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). Deprecated, please use &#x60;endTime&#x60; instead. (optional) (deprecated)
     * @param  string $cursor Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. (optional)
     * @param  string $pagination_token Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use &#x60;cursor&#x60; instead. (optional) (deprecated)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLogs'] to see the possible values for this operation
     *
     * @throws \Numary\Ledger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Numary\Ledger\Model\LogsCursorResponse|\Numary\Ledger\Model\ErrorResponse
     */
    public function listLogs($ledger, $page_size = 15, $page_size2 = 15, $after = null, $start_time = null, $start_time2 = null, $end_time = null, $end_time2 = null, $cursor = null, $pagination_token = null, string $contentType = self::contentTypes['listLogs'][0])
    {
        list($response) = $this->listLogsWithHttpInfo($ledger, $page_size, $page_size2, $after, $start_time, $start_time2, $end_time, $end_time2, $cursor, $pagination_token, $contentType);
        return $response;
    }

    /**
     * Operation listLogsWithHttpInfo
     *
     * List the logs from a ledger
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  int $page_size The maximum number of results to return per page. (optional, default to 15)
     * @param  int $page_size2 The maximum number of results to return per page. Deprecated, please use &#x60;pageSize&#x60; instead. (optional, default to 15) (deprecated)
     * @param  string $after Pagination cursor, will return the logs after a given ID. (in descending order). (optional)
     * @param  \DateTime $start_time Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). (optional)
     * @param  \DateTime $start_time2 Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). Deprecated, please use &#x60;startTime&#x60; instead. (optional) (deprecated)
     * @param  \DateTime $end_time Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). (optional)
     * @param  \DateTime $end_time2 Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). Deprecated, please use &#x60;endTime&#x60; instead. (optional) (deprecated)
     * @param  string $cursor Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. (optional)
     * @param  string $pagination_token Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use &#x60;cursor&#x60; instead. (optional) (deprecated)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLogs'] to see the possible values for this operation
     *
     * @throws \Numary\Ledger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Numary\Ledger\Model\LogsCursorResponse|\Numary\Ledger\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listLogsWithHttpInfo($ledger, $page_size = 15, $page_size2 = 15, $after = null, $start_time = null, $start_time2 = null, $end_time = null, $end_time2 = null, $cursor = null, $pagination_token = null, string $contentType = self::contentTypes['listLogs'][0])
    {
        $request = $this->listLogsRequest($ledger, $page_size, $page_size2, $after, $start_time, $start_time2, $end_time, $end_time2, $cursor, $pagination_token, $contentType);

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
                    if ('\Numary\Ledger\Model\LogsCursorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Numary\Ledger\Model\LogsCursorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Numary\Ledger\Model\LogsCursorResponse', []),
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

            $returnType = '\Numary\Ledger\Model\LogsCursorResponse';
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
                        '\Numary\Ledger\Model\LogsCursorResponse',
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
     * Operation listLogsAsync
     *
     * List the logs from a ledger
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  int $page_size The maximum number of results to return per page. (optional, default to 15)
     * @param  int $page_size2 The maximum number of results to return per page. Deprecated, please use &#x60;pageSize&#x60; instead. (optional, default to 15) (deprecated)
     * @param  string $after Pagination cursor, will return the logs after a given ID. (in descending order). (optional)
     * @param  \DateTime $start_time Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). (optional)
     * @param  \DateTime $start_time2 Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). Deprecated, please use &#x60;startTime&#x60; instead. (optional) (deprecated)
     * @param  \DateTime $end_time Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). (optional)
     * @param  \DateTime $end_time2 Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). Deprecated, please use &#x60;endTime&#x60; instead. (optional) (deprecated)
     * @param  string $cursor Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. (optional)
     * @param  string $pagination_token Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use &#x60;cursor&#x60; instead. (optional) (deprecated)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLogs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLogsAsync($ledger, $page_size = 15, $page_size2 = 15, $after = null, $start_time = null, $start_time2 = null, $end_time = null, $end_time2 = null, $cursor = null, $pagination_token = null, string $contentType = self::contentTypes['listLogs'][0])
    {
        return $this->listLogsAsyncWithHttpInfo($ledger, $page_size, $page_size2, $after, $start_time, $start_time2, $end_time, $end_time2, $cursor, $pagination_token, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listLogsAsyncWithHttpInfo
     *
     * List the logs from a ledger
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  int $page_size The maximum number of results to return per page. (optional, default to 15)
     * @param  int $page_size2 The maximum number of results to return per page. Deprecated, please use &#x60;pageSize&#x60; instead. (optional, default to 15) (deprecated)
     * @param  string $after Pagination cursor, will return the logs after a given ID. (in descending order). (optional)
     * @param  \DateTime $start_time Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). (optional)
     * @param  \DateTime $start_time2 Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). Deprecated, please use &#x60;startTime&#x60; instead. (optional) (deprecated)
     * @param  \DateTime $end_time Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). (optional)
     * @param  \DateTime $end_time2 Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). Deprecated, please use &#x60;endTime&#x60; instead. (optional) (deprecated)
     * @param  string $cursor Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. (optional)
     * @param  string $pagination_token Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use &#x60;cursor&#x60; instead. (optional) (deprecated)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLogs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLogsAsyncWithHttpInfo($ledger, $page_size = 15, $page_size2 = 15, $after = null, $start_time = null, $start_time2 = null, $end_time = null, $end_time2 = null, $cursor = null, $pagination_token = null, string $contentType = self::contentTypes['listLogs'][0])
    {
        $returnType = '\Numary\Ledger\Model\LogsCursorResponse';
        $request = $this->listLogsRequest($ledger, $page_size, $page_size2, $after, $start_time, $start_time2, $end_time, $end_time2, $cursor, $pagination_token, $contentType);

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
     * Create request for operation 'listLogs'
     *
     * @param  string $ledger Name of the ledger. (required)
     * @param  int $page_size The maximum number of results to return per page. (optional, default to 15)
     * @param  int $page_size2 The maximum number of results to return per page. Deprecated, please use &#x60;pageSize&#x60; instead. (optional, default to 15) (deprecated)
     * @param  string $after Pagination cursor, will return the logs after a given ID. (in descending order). (optional)
     * @param  \DateTime $start_time Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). (optional)
     * @param  \DateTime $start_time2 Filter transactions that occurred after this timestamp. The format is RFC3339 and is inclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; includes the first second of 4th minute). Deprecated, please use &#x60;startTime&#x60; instead. (optional) (deprecated)
     * @param  \DateTime $end_time Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). (optional)
     * @param  \DateTime $end_time2 Filter transactions that occurred before this timestamp. The format is RFC3339 and is exclusive (for example, \&quot;2023-01-02T15:04:01Z\&quot; excludes the first second of 4th minute). Deprecated, please use &#x60;endTime&#x60; instead. (optional) (deprecated)
     * @param  string $cursor Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. (optional)
     * @param  string $pagination_token Parameter used in pagination requests. Maximum page size is set to 15. Set to the value of next for the next page of results. Set to the value of previous for the previous page of results. No other parameters can be set when this parameter is set. Deprecated, please use &#x60;cursor&#x60; instead. (optional) (deprecated)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLogs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listLogsRequest($ledger, $page_size = 15, $page_size2 = 15, $after = null, $start_time = null, $start_time2 = null, $end_time = null, $end_time2 = null, $cursor = null, $pagination_token = null, string $contentType = self::contentTypes['listLogs'][0])
    {

        // verify the required parameter 'ledger' is set
        if ($ledger === null || (is_array($ledger) && count($ledger) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ledger when calling listLogs'
            );
        }

        if ($page_size !== null && $page_size > 1000) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling LogsApi.listLogs, must be smaller than or equal to 1000.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling LogsApi.listLogs, must be bigger than or equal to 1.');
        }
        
        if ($page_size2 !== null && $page_size2 > 1000) {
            throw new \InvalidArgumentException('invalid value for "$page_size2" when calling LogsApi.listLogs, must be smaller than or equal to 1000.');
        }
        if ($page_size2 !== null && $page_size2 < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size2" when calling LogsApi.listLogs, must be bigger than or equal to 1.');
        }
        








        $resourcePath = '/{ledger}/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'pageSize', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size2,
            'page_size', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $after,
            'after', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_time,
            'startTime', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_time2,
            'start_time', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end_time,
            'endTime', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end_time2,
            'end_time', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cursor,
            'cursor', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $pagination_token,
            'pagination_token', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($ledger !== null) {
            $resourcePath = str_replace(
                '{' . 'ledger' . '}',
                ObjectSerializer::toPathValue($ledger),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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
