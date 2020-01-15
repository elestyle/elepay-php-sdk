<?php
/**
 * ChargeApi
 * PHP version 5
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
 * The version of the OpenAPI document: 1.1.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Elepay\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Elepay\ApiException;
use Elepay\Configuration;
use Elepay\HeaderSelector;
use Elepay\ObjectSerializer;

/**
 * ChargeApi Class Doc Comment
 *
 * @category Class
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChargeApi
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

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation createCharge
     *
     * Create charge
     *
     * @param  \Elepay\Model\ChargeReq $chargeReq 支払リクエスト (required)
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Elepay\Model\ChargeDto
     */
    public function createCharge($chargeReq)
    {
        list($response) = $this->createChargeWithHttpInfo($chargeReq);
        return $response;
    }

    /**
     * Operation createChargeWithHttpInfo
     *
     * Create charge
     *
     * @param  \Elepay\Model\ChargeReq $chargeReq 支払リクエスト (required)
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Elepay\Model\ChargeDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function createChargeWithHttpInfo($chargeReq)
    {
        $request = $this->createChargeRequest($chargeReq);

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
            switch($statusCode) {
                case 201:
                    if ('\Elepay\Model\ChargeDto' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Elepay\Model\ChargeDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Elepay\Model\ChargeDto';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Elepay\Model\ChargeDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createChargeAsync
     *
     * Create charge
     *
     * @param  \Elepay\Model\ChargeReq $chargeReq 支払リクエスト (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createChargeAsync($chargeReq)
    {
        return $this->createChargeAsyncWithHttpInfo($chargeReq)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createChargeAsyncWithHttpInfo
     *
     * Create charge
     *
     * @param  \Elepay\Model\ChargeReq $chargeReq 支払リクエスト (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createChargeAsyncWithHttpInfo($chargeReq)
    {
        $returnType = '\Elepay\Model\ChargeDto';
        $request = $this->createChargeRequest($chargeReq);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'createCharge'
     *
     * @param  \Elepay\Model\ChargeReq $chargeReq 支払リクエスト (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createChargeRequest($chargeReq)
    {
        // verify the required parameter 'chargeReq' is set
        if ($chargeReq === null || (is_array($chargeReq) && count($chargeReq) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chargeReq when calling createCharge'
            );
        }

        $resourcePath = '/charges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($chargeReq)) {
            $_tempBody = $chargeReq;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                ['application/json;charset=utf-8']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listCharges
     *
     * List charges
     *
     * @param  \Elepay\Model\PaymentMethodType[] $paymentMethod 決済方法(複数の指定が可能です) (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  \Elepay\Model\ChargeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\ChargeStatusType $status 支払状況 (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  \Elepay\Model\ChargeDateTimeType $sort ソート項目 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Elepay\Model\ChargesResponse
     */
    public function listCharges($paymentMethod = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null)
    {
        list($response) = $this->listChargesWithHttpInfo($paymentMethod, $from, $to, $dateField, $status, $limit, $offset, $sort, $order);
        return $response;
    }

    /**
     * Operation listChargesWithHttpInfo
     *
     * List charges
     *
     * @param  \Elepay\Model\PaymentMethodType[] $paymentMethod 決済方法(複数の指定が可能です) (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  \Elepay\Model\ChargeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\ChargeStatusType $status 支払状況 (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  \Elepay\Model\ChargeDateTimeType $sort ソート項目 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Elepay\Model\ChargesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listChargesWithHttpInfo($paymentMethod = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null)
    {
        $request = $this->listChargesRequest($paymentMethod, $from, $to, $dateField, $status, $limit, $offset, $sort, $order);

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
            switch($statusCode) {
                case 200:
                    if ('\Elepay\Model\ChargesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Elepay\Model\ChargesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Elepay\Model\ChargesResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Elepay\Model\ChargesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listChargesAsync
     *
     * List charges
     *
     * @param  \Elepay\Model\PaymentMethodType[] $paymentMethod 決済方法(複数の指定が可能です) (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  \Elepay\Model\ChargeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\ChargeStatusType $status 支払状況 (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  \Elepay\Model\ChargeDateTimeType $sort ソート項目 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listChargesAsync($paymentMethod = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null)
    {
        return $this->listChargesAsyncWithHttpInfo($paymentMethod, $from, $to, $dateField, $status, $limit, $offset, $sort, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listChargesAsyncWithHttpInfo
     *
     * List charges
     *
     * @param  \Elepay\Model\PaymentMethodType[] $paymentMethod 決済方法(複数の指定が可能です) (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  \Elepay\Model\ChargeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\ChargeStatusType $status 支払状況 (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  \Elepay\Model\ChargeDateTimeType $sort ソート項目 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listChargesAsyncWithHttpInfo($paymentMethod = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null)
    {
        $returnType = '\Elepay\Model\ChargesResponse';
        $request = $this->listChargesRequest($paymentMethod, $from, $to, $dateField, $status, $limit, $offset, $sort, $order);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'listCharges'
     *
     * @param  \Elepay\Model\PaymentMethodType[] $paymentMethod 決済方法(複数の指定が可能です) (optional)
     * @param  int $from 開始時間（UTC）。指定した時間以降に作成されたデータを取得します。 (optional)
     * @param  int $to 終了時間（UTC）。指定した時間以前に作成されたデータを取得します (optional)
     * @param  \Elepay\Model\ChargeDateTimeType $dateField 開始時間と終了時間の項目を指定します。 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\ChargeStatusType $status 支払状況 (optional)
     * @param  int $limit 最大件数 (optional, default to 20)
     * @param  int $offset 検索開始位置 (optional, default to 0)
     * @param  \Elepay\Model\ChargeDateTimeType $sort ソート項目 - paid_time 払う時間 - create_time 決済新規時間 (optional)
     * @param  \Elepay\Model\SortOrderType $order ソート順 - desc 降順 - asc 昇順 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listChargesRequest($paymentMethod = null, $from = null, $to = null, $dateField = null, $status = null, $limit = 20, $offset = 0, $sort = null, $order = null)
    {
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ChargeApi.listCharges, must be smaller than or equal to 100.');
        }


        $resourcePath = '/charges';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($paymentMethod)) {
            $paymentMethod = ObjectSerializer::serializeCollection($paymentMethod, 'multi', true);
        }
        if ($paymentMethod !== null) {
            $queryParams['paymentMethod'] = ObjectSerializer::toQueryValue($paymentMethod);
        }
        // query params
        if ($from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($from);
        }
        // query params
        if ($to !== null) {
            $queryParams['to'] = ObjectSerializer::toQueryValue($to);
        }
        // query params
        if ($dateField !== null) {
            $queryParams['dateField'] = ObjectSerializer::toQueryValue($dateField);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = ObjectSerializer::toQueryValue($order);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation retrieveCharge
     *
     * Retrieve charge
     *
     * @param  string $id Charge ID (required)
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Elepay\Model\ChargeDto
     */
    public function retrieveCharge($id)
    {
        list($response) = $this->retrieveChargeWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation retrieveChargeWithHttpInfo
     *
     * Retrieve charge
     *
     * @param  string $id Charge ID (required)
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Elepay\Model\ChargeDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveChargeWithHttpInfo($id)
    {
        $request = $this->retrieveChargeRequest($id);

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
            switch($statusCode) {
                case 200:
                    if ('\Elepay\Model\ChargeDto' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Elepay\Model\ChargeDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Elepay\Model\ChargeDto';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Elepay\Model\ChargeDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveChargeAsync
     *
     * Retrieve charge
     *
     * @param  string $id Charge ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveChargeAsync($id)
    {
        return $this->retrieveChargeAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveChargeAsyncWithHttpInfo
     *
     * Retrieve charge
     *
     * @param  string $id Charge ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveChargeAsyncWithHttpInfo($id)
    {
        $returnType = '\Elepay\Model\ChargeDto';
        $request = $this->retrieveChargeRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'retrieveCharge'
     *
     * @param  string $id Charge ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveChargeRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling retrieveCharge'
            );
        }

        $resourcePath = '/charges/{id}';
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

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=utf-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=utf-8'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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
