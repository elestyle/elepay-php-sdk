<?php
/**
 * DisputeApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * elepay API リファレンス
 *
 * elepay APIはRESTをベースに構成された決済APIです。支払い処理、返金処理など、決済に関わる運用における様々なことができます。
 *
 * The version of the OpenAPI document: 1.2.0
 * Contact: support@elestyle.jp
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Elepay\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Elepay\ApiException;
use Elepay\Configuration;
use Elepay\HeaderSelector;
use Elepay\ObjectSerializer;

/**
 * DisputeApi Class Doc Comment
 *
 * @category Class
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DisputeApi
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
        'listDisputes' => [
            'application/json',
        ],
        'retrieveDispute' => [
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
     * Operation listDisputes
     *
     * List disputes
     *
     * @param  string $chargeId Charge ID (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  DisputeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - resolved_time 不審請求解決時間 - create_time 不審請求発生時間 (optional)
     * @param  DisputeStatusType $status 不審請求ステータス (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  DisputeDateTimeType $sort ソート項目 - resolved_time 不審請求解決時間 - create_time 決済新規時間 (optional)
     * @param  SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listDisputes'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Elepay\Model\DisputesResponse
     */
    public function listDisputes($chargeId = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null, string $contentType = self::contentTypes['listDisputes'][0])
    {
        list($response) = $this->listDisputesWithHttpInfo($chargeId, $from, $to, $dateField, $status, $limit, $offset, $sort, $order, $contentType);
        return $response;
    }

    /**
     * Operation listDisputesWithHttpInfo
     *
     * List disputes
     *
     * @param  string $chargeId Charge ID (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  DisputeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - resolved_time 不審請求解決時間 - create_time 不審請求発生時間 (optional)
     * @param  DisputeStatusType $status 不審請求ステータス (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  DisputeDateTimeType $sort ソート項目 - resolved_time 不審請求解決時間 - create_time 決済新規時間 (optional)
     * @param  SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listDisputes'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Elepay\Model\DisputesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listDisputesWithHttpInfo($chargeId = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null, string $contentType = self::contentTypes['listDisputes'][0])
    {
        $request = $this->listDisputesRequest($chargeId, $from, $to, $dateField, $status, $limit, $offset, $sort, $order, $contentType);

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
                    if ('\Elepay\Model\DisputesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Elepay\Model\DisputesResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Elepay\Model\DisputesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Elepay\Model\DisputesResponse';
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
                        '\Elepay\Model\DisputesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listDisputesAsync
     *
     * List disputes
     *
     * @param  string $chargeId Charge ID (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  DisputeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - resolved_time 不審請求解決時間 - create_time 不審請求発生時間 (optional)
     * @param  DisputeStatusType $status 不審請求ステータス (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  DisputeDateTimeType $sort ソート項目 - resolved_time 不審請求解決時間 - create_time 決済新規時間 (optional)
     * @param  SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listDisputes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDisputesAsync($chargeId = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null, string $contentType = self::contentTypes['listDisputes'][0])
    {
        return $this->listDisputesAsyncWithHttpInfo($chargeId, $from, $to, $dateField, $status, $limit, $offset, $sort, $order, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listDisputesAsyncWithHttpInfo
     *
     * List disputes
     *
     * @param  string $chargeId Charge ID (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  DisputeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - resolved_time 不審請求解決時間 - create_time 不審請求発生時間 (optional)
     * @param  DisputeStatusType $status 不審請求ステータス (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  DisputeDateTimeType $sort ソート項目 - resolved_time 不審請求解決時間 - create_time 決済新規時間 (optional)
     * @param  SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listDisputes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDisputesAsyncWithHttpInfo($chargeId = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null, string $contentType = self::contentTypes['listDisputes'][0])
    {
        $returnType = '\Elepay\Model\DisputesResponse';
        $request = $this->listDisputesRequest($chargeId, $from, $to, $dateField, $status, $limit, $offset, $sort, $order, $contentType);

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
     * Create request for operation 'listDisputes'
     *
     * @param  string $chargeId Charge ID (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  DisputeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - resolved_time 不審請求解決時間 - create_time 不審請求発生時間 (optional)
     * @param  DisputeStatusType $status 不審請求ステータス (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  DisputeDateTimeType $sort ソート項目 - resolved_time 不審請求解決時間 - create_time 決済新規時間 (optional)
     * @param  SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listDisputes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listDisputesRequest($chargeId = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null, string $contentType = self::contentTypes['listDisputes'][0])
    {






        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling DisputeApi.listDisputes, must be smaller than or equal to 100.');
        }
        




        $resourcePath = '/disputes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $chargeId,
            'chargeId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $from,
            'from', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to,
            'to', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $dateField,
            'dateField', // param base name
            'DisputeDateTimeType', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'DisputeStatusType', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'DisputeDateTimeType', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'SortOrderType', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json;charset=utf-8', ],
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
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation retrieveDispute
     *
     * Retrieve dispute
     *
     * @param  string $id Dispute ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveDispute'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Elepay\Model\DisputeDto
     */
    public function retrieveDispute($id, string $contentType = self::contentTypes['retrieveDispute'][0])
    {
        list($response) = $this->retrieveDisputeWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation retrieveDisputeWithHttpInfo
     *
     * Retrieve dispute
     *
     * @param  string $id Dispute ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveDispute'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Elepay\Model\DisputeDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveDisputeWithHttpInfo($id, string $contentType = self::contentTypes['retrieveDispute'][0])
    {
        $request = $this->retrieveDisputeRequest($id, $contentType);

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
                    if ('\Elepay\Model\DisputeDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Elepay\Model\DisputeDto' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Elepay\Model\DisputeDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Elepay\Model\DisputeDto';
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
                        '\Elepay\Model\DisputeDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveDisputeAsync
     *
     * Retrieve dispute
     *
     * @param  string $id Dispute ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveDispute'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveDisputeAsync($id, string $contentType = self::contentTypes['retrieveDispute'][0])
    {
        return $this->retrieveDisputeAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveDisputeAsyncWithHttpInfo
     *
     * Retrieve dispute
     *
     * @param  string $id Dispute ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveDispute'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveDisputeAsyncWithHttpInfo($id, string $contentType = self::contentTypes['retrieveDispute'][0])
    {
        $returnType = '\Elepay\Model\DisputeDto';
        $request = $this->retrieveDisputeRequest($id, $contentType);

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
     * Create request for operation 'retrieveDispute'
     *
     * @param  string $id Dispute ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveDispute'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function retrieveDisputeRequest($id, string $contentType = self::contentTypes['retrieveDispute'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling retrieveDispute'
            );
        }


        $resourcePath = '/disputes/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json;charset=utf-8', ],
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
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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