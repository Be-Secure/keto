<?php
/**
 * VersionApi
 * PHP version 5
 *
 * @category Class
 * @package  keto\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ORY Keto
 *
 * A cloud native access control server providing best-practice patterns (RBAC, ABAC, ACL, AWS IAM Policies, Kubernetes Roles, ...) via REST APIs.
 *
 * OpenAPI spec version: Latest
 * Contact: hi@ory.sh
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace keto\SDK\Api;

use \keto\SDK\ApiClient;
use \keto\SDK\ApiException;
use \keto\SDK\Configuration;
use \keto\SDK\ObjectSerializer;

/**
 * VersionApi Class Doc Comment
 *
 * @category Class
 * @package  keto\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VersionApi
{
    /**
     * API Client
     *
     * @var \keto\SDK\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \keto\SDK\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\keto\SDK\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \keto\SDK\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \keto\SDK\ApiClient $apiClient set the API client
     *
     * @return VersionApi
     */
    public function setApiClient(\keto\SDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getVersion
     *
     * Get service version
     *
     * Client for keto
     *
     * @throws \keto\SDK\ApiException on non-2xx response
     * @return \keto\SDK\Model\Version
     */
    public function getVersion()
    {
        list($response) = $this->getVersionWithHttpInfo();
        return $response;
    }

    /**
     * Operation getVersionWithHttpInfo
     *
     * Get service version
     *
     * Client for keto
     *
     * @throws \keto\SDK\ApiException on non-2xx response
     * @return array of \keto\SDK\Model\Version, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVersionWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/version";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\keto\SDK\Model\Version',
                '/version'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\keto\SDK\Model\Version', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\keto\SDK\Model\Version', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}