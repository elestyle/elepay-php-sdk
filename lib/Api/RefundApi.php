<?php
/**
 * RefundApi
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
 * The version of the OpenAPI document: 1.2.3
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
 * RefundApi Class Doc Comment
 *
 * @category Class
 * @package  Elepay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundApi
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
        'createRefund' => [
            'application/json;charset=utf-8',
        ],
        'listChargesRefunds' => [
            'application/json',
        ],
        'retrieveChargeRefund' => [
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
     * Operation createRefund
     *
     * Create refund
     *
     * @param  string $id Charge ID (required)
     * @param  \Elepay\Model\RefundReq $refundReq 返金の詳細情報 (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Elepay\Model\RefundDto
     */
    public function createRefund($id, $refundReq, string $contentType = self::contentTypes['createRefund'][0])
    {
        list($response) = $this->createRefundWithHttpInfo($id, $refundReq, $contentType);
        return $response;
    }

    /**
     * Operation createRefundWithHttpInfo
     *
     * Create refund
     *
     * @param  string $id Charge ID (required)
     * @param  \Elepay\Model\RefundReq $refundReq 返金の詳細情報 (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Elepay\Model\RefundDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRefundWithHttpInfo($id, $refundReq, string $contentType = self::contentTypes['createRefund'][0])
    {
        $request = $this->createRefundRequest($id, $refundReq, $contentType);

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
                case 201:
                    if ('\Elepay\Model\RefundDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Elepay\Model\RefundDto' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Elepay\Model\RefundDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Elepay\Model\RefundDto';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Elepay\Model\RefundDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createRefundAsync
     *
     * Create refund
     *
     * @param  string $id Charge ID (required)
     * @param  \Elepay\Model\RefundReq $refundReq 返金の詳細情報 (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRefundAsync($id, $refundReq, string $contentType = self::contentTypes['createRefund'][0])
    {
        return $this->createRefundAsyncWithHttpInfo($id, $refundReq, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createRefundAsyncWithHttpInfo
     *
     * Create refund
     *
     * @param  string $id Charge ID (required)
     * @param  \Elepay\Model\RefundReq $refundReq 返金の詳細情報 (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRefundAsyncWithHttpInfo($id, $refundReq, string $contentType = self::contentTypes['createRefund'][0])
    {
        $returnType = '\Elepay\Model\RefundDto';
        $request = $this->createRefundRequest($id, $refundReq, $contentType);

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
     * Create request for operation 'createRefund'
     *
     * @param  string $id Charge ID (required)
     * @param  \Elepay\Model\RefundReq $refundReq 返金の詳細情報 (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRefundRequest($id, $refundReq, string $contentType = self::contentTypes['createRefund'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling createRefund'
            );
        }

        // verify the required parameter 'refundReq' is set
        if ($refundReq === null || (is_array($refundReq) && count($refundReq) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refundReq when calling createRefund'
            );
        }


        $resourcePath = '/charges/{id}/refunds';
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
        if (isset($refundReq)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($refundReq));
            } else {
                $httpBody = $refundReq;
            }
        } elseif (count($formParams) > 0) {
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
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listChargesRefunds
     *
     * List refunds
     *
     * @param  string $id Charge ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listChargesRefunds'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Elepay\Model\RefundsResponse
     */
    public function listChargesRefunds($id, string $contentType = self::contentTypes['listChargesRefunds'][0])
    {
        list($response) = $this->listChargesRefundsWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation listChargesRefundsWithHttpInfo
     *
     * List refunds
     *
     * @param  string $id Charge ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listChargesRefunds'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Elepay\Model\RefundsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listChargesRefundsWithHttpInfo($id, string $contentType = self::contentTypes['listChargesRefunds'][0])
    {
        $request = $this->listChargesRefundsRequest($id, $contentType);

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
                    if ('\Elepay\Model\RefundsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Elepay\Model\RefundsResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Elepay\Model\RefundsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Elepay\Model\RefundsResponse';
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
                        '\Elepay\Model\RefundsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listChargesRefundsAsync
     *
     * List refunds
     *
     * @param  string $id Charge ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listChargesRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listChargesRefundsAsync($id, string $contentType = self::contentTypes['listChargesRefunds'][0])
    {
        return $this->listChargesRefundsAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listChargesRefundsAsyncWithHttpInfo
     *
     * List refunds
     *
     * @param  string $id Charge ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listChargesRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listChargesRefundsAsyncWithHttpInfo($id, string $contentType = self::contentTypes['listChargesRefunds'][0])
    {
        $returnType = '\Elepay\Model\RefundsResponse';
        $request = $this->listChargesRefundsRequest($id, $contentType);

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
     * Create request for operation 'listChargesRefunds'
     *
     * @param  string $id Charge ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listChargesRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listChargesRefundsRequest($id, string $contentType = self::contentTypes['listChargesRefunds'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling listChargesRefunds'
            );
        }


        $resourcePath = '/charges/{id}/refunds';
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
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
     * Operation retrieveChargeRefund
     *
     * Retrieve refund
     *
     * @param  string $id Charge ID (required)
     * @param  string $refundId Refund ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveChargeRefund'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Elepay\Model\RefundDto
     */
    public function retrieveChargeRefund($id, $refundId, string $contentType = self::contentTypes['retrieveChargeRefund'][0])
    {
        list($response) = $this->retrieveChargeRefundWithHttpInfo($id, $refundId, $contentType);
        return $response;
    }

    /**
     * Operation retrieveChargeRefundWithHttpInfo
     *
     * Retrieve refund
     *
     * @param  string $id Charge ID (required)
     * @param  string $refundId Refund ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveChargeRefund'] to see the possible values for this operation
     *
     * @throws \Elepay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Elepay\Model\RefundDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveChargeRefundWithHttpInfo($id, $refundId, string $contentType = self::contentTypes['retrieveChargeRefund'][0])
    {
        $request = $this->retrieveChargeRefundRequest($id, $refundId, $contentType);

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
                    if ('\Elepay\Model\RefundDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Elepay\Model\RefundDto' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Elepay\Model\RefundDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Elepay\Model\RefundDto';
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
                        '\Elepay\Model\RefundDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveChargeRefundAsync
     *
     * Retrieve refund
     *
     * @param  string $id Charge ID (required)
     * @param  string $refundId Refund ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveChargeRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveChargeRefundAsync($id, $refundId, string $contentType = self::contentTypes['retrieveChargeRefund'][0])
    {
        return $this->retrieveChargeRefundAsyncWithHttpInfo($id, $refundId, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveChargeRefundAsyncWithHttpInfo
     *
     * Retrieve refund
     *
     * @param  string $id Charge ID (required)
     * @param  string $refundId Refund ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveChargeRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveChargeRefundAsyncWithHttpInfo($id, $refundId, string $contentType = self::contentTypes['retrieveChargeRefund'][0])
    {
        $returnType = '\Elepay\Model\RefundDto';
        $request = $this->retrieveChargeRefundRequest($id, $refundId, $contentType);

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
     * Create request for operation 'retrieveChargeRefund'
     *
     * @param  string $id Charge ID (required)
     * @param  string $refundId Refund ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['retrieveChargeRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function retrieveChargeRefundRequest($id, $refundId, string $contentType = self::contentTypes['retrieveChargeRefund'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling retrieveChargeRefund'
            );
        }

        // verify the required parameter 'refundId' is set
        if ($refundId === null || (is_array($refundId) && count($refundId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refundId when calling retrieveChargeRefund'
            );
        }


        $resourcePath = '/charges/{id}/refunds/{refundId}';
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
        // path params
        if ($refundId !== null) {
            $resourcePath = str_replace(
                '{' . 'refundId' . '}',
                ObjectSerializer::toPathValue($refundId),
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
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
