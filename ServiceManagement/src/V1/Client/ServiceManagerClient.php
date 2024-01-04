<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/api/servicemanagement/v1/servicemanager.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ServiceManagement\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Api\Service;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\ServiceManagement\V1\CreateServiceConfigRequest;
use Google\Cloud\ServiceManagement\V1\CreateServiceRequest;
use Google\Cloud\ServiceManagement\V1\CreateServiceRolloutRequest;
use Google\Cloud\ServiceManagement\V1\DeleteServiceRequest;
use Google\Cloud\ServiceManagement\V1\GenerateConfigReportRequest;
use Google\Cloud\ServiceManagement\V1\GenerateConfigReportResponse;
use Google\Cloud\ServiceManagement\V1\GetServiceConfigRequest;
use Google\Cloud\ServiceManagement\V1\GetServiceRequest;
use Google\Cloud\ServiceManagement\V1\GetServiceRolloutRequest;
use Google\Cloud\ServiceManagement\V1\ListServiceConfigsRequest;
use Google\Cloud\ServiceManagement\V1\ListServiceRolloutsRequest;
use Google\Cloud\ServiceManagement\V1\ListServicesRequest;
use Google\Cloud\ServiceManagement\V1\ManagedService;
use Google\Cloud\ServiceManagement\V1\Rollout;
use Google\Cloud\ServiceManagement\V1\SubmitConfigSourceRequest;
use Google\Cloud\ServiceManagement\V1\SubmitConfigSourceResponse;
use Google\Cloud\ServiceManagement\V1\UndeleteServiceRequest;
use Google\Cloud\ServiceManagement\V1\UndeleteServiceResponse;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: [Google Service Management
 * API](https://cloud.google.com/service-infrastructure/docs/overview)
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface createServiceAsync(CreateServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createServiceConfigAsync(CreateServiceConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createServiceRolloutAsync(CreateServiceRolloutRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteServiceAsync(DeleteServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface generateConfigReportAsync(GenerateConfigReportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getServiceAsync(GetServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getServiceConfigAsync(GetServiceConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getServiceRolloutAsync(GetServiceRolloutRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listServiceConfigsAsync(ListServiceConfigsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listServiceRolloutsAsync(ListServiceRolloutsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listServicesAsync(ListServicesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface submitConfigSourceAsync(SubmitConfigSourceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface undeleteServiceAsync(UndeleteServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class ServiceManagerClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.api.servicemanagement.v1.ServiceManager';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'servicemanagement.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'servicemanagement.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
        'https://www.googleapis.com/auth/service.management',
        'https://www.googleapis.com/auth/service.management.readonly',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/service_manager_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/service_manager_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/service_manager_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/service_manager_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'servicemanagement.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a new managed service.
     *
     * A managed service is immutable, and is subject to mandatory 30-day
     * data retention. You cannot move a service or recreate it within 30 days
     * after deletion.
     *
     * One producer project can own no more than 500 services. For security and
     * reliability purposes, a production service should be hosted in a
     * dedicated producer project.
     *
     * Operation<response: ManagedService>
     *
     * The async variant is {@see ServiceManagerClient::createServiceAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/create_service.php
     *
     * @param CreateServiceRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createService(CreateServiceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateService', $request, $callOptions)->wait();
    }

    /**
     * Creates a new service configuration (version) for a managed service.
     * This method only stores the service configuration. To roll out the service
     * configuration to backend systems please call
     * [CreateServiceRollout][google.api.servicemanagement.v1.ServiceManager.CreateServiceRollout].
     *
     * Only the 100 most recent service configurations and ones referenced by
     * existing rollouts are kept for each service. The rest will be deleted
     * eventually.
     *
     * The async variant is {@see ServiceManagerClient::createServiceConfigAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/create_service_config.php
     *
     * @param CreateServiceConfigRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Service
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createServiceConfig(CreateServiceConfigRequest $request, array $callOptions = []): Service
    {
        return $this->startApiCall('CreateServiceConfig', $request, $callOptions)->wait();
    }

    /**
     * Creates a new service configuration rollout. Based on rollout, the
     * Google Service Management will roll out the service configurations to
     * different backend services. For example, the logging configuration will be
     * pushed to Google Cloud Logging.
     *
     * Please note that any previous pending and running Rollouts and associated
     * Operations will be automatically cancelled so that the latest Rollout will
     * not be blocked by previous Rollouts.
     *
     * Only the 100 most recent (in any state) and the last 10 successful (if not
     * already part of the set of 100 most recent) rollouts are kept for each
     * service. The rest will be deleted eventually.
     *
     * Operation<response: Rollout>
     *
     * The async variant is {@see ServiceManagerClient::createServiceRolloutAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/create_service_rollout.php
     *
     * @param CreateServiceRolloutRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createServiceRollout(CreateServiceRolloutRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateServiceRollout', $request, $callOptions)->wait();
    }

    /**
     * Deletes a managed service. This method will change the service to the
     * `Soft-Delete` state for 30 days. Within this period, service producers may
     * call
     * [UndeleteService][google.api.servicemanagement.v1.ServiceManager.UndeleteService]
     * to restore the service. After 30 days, the service will be permanently
     * deleted.
     *
     * Operation<response: google.protobuf.Empty>
     *
     * The async variant is {@see ServiceManagerClient::deleteServiceAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/delete_service.php
     *
     * @param DeleteServiceRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteService(DeleteServiceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteService', $request, $callOptions)->wait();
    }

    /**
     * Generates and returns a report (errors, warnings and changes from
     * existing configurations) associated with
     * GenerateConfigReportRequest.new_value
     *
     * If GenerateConfigReportRequest.old_value is specified,
     * GenerateConfigReportRequest will contain a single ChangeReport based on the
     * comparison between GenerateConfigReportRequest.new_value and
     * GenerateConfigReportRequest.old_value.
     * If GenerateConfigReportRequest.old_value is not specified, this method
     * will compare GenerateConfigReportRequest.new_value with the last pushed
     * service configuration.
     *
     * The async variant is {@see ServiceManagerClient::generateConfigReportAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/generate_config_report.php
     *
     * @param GenerateConfigReportRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return GenerateConfigReportResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function generateConfigReport(GenerateConfigReportRequest $request, array $callOptions = []): GenerateConfigReportResponse
    {
        return $this->startApiCall('GenerateConfigReport', $request, $callOptions)->wait();
    }

    /**
     * Gets a managed service. Authentication is required unless the service is
     * public.
     *
     * The async variant is {@see ServiceManagerClient::getServiceAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/get_service.php
     *
     * @param GetServiceRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ManagedService
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getService(GetServiceRequest $request, array $callOptions = []): ManagedService
    {
        return $this->startApiCall('GetService', $request, $callOptions)->wait();
    }

    /**
     * Gets a service configuration (version) for a managed service.
     *
     * The async variant is {@see ServiceManagerClient::getServiceConfigAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/get_service_config.php
     *
     * @param GetServiceConfigRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Service
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getServiceConfig(GetServiceConfigRequest $request, array $callOptions = []): Service
    {
        return $this->startApiCall('GetServiceConfig', $request, $callOptions)->wait();
    }

    /**
     * Gets a service configuration
     * [rollout][google.api.servicemanagement.v1.Rollout].
     *
     * The async variant is {@see ServiceManagerClient::getServiceRolloutAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/get_service_rollout.php
     *
     * @param GetServiceRolloutRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Rollout
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getServiceRollout(GetServiceRolloutRequest $request, array $callOptions = []): Rollout
    {
        return $this->startApiCall('GetServiceRollout', $request, $callOptions)->wait();
    }

    /**
     * Lists the history of the service configuration for a managed service,
     * from the newest to the oldest.
     *
     * The async variant is {@see ServiceManagerClient::listServiceConfigsAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/list_service_configs.php
     *
     * @param ListServiceConfigsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listServiceConfigs(ListServiceConfigsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListServiceConfigs', $request, $callOptions);
    }

    /**
     * Lists the history of the service configuration rollouts for a managed
     * service, from the newest to the oldest.
     *
     * The async variant is {@see ServiceManagerClient::listServiceRolloutsAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/list_service_rollouts.php
     *
     * @param ListServiceRolloutsRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listServiceRollouts(ListServiceRolloutsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListServiceRollouts', $request, $callOptions);
    }

    /**
     * Lists managed services.
     *
     * Returns all public services. For authenticated users, also returns all
     * services the calling user has "servicemanagement.services.get" permission
     * for.
     *
     * The async variant is {@see ServiceManagerClient::listServicesAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/list_services.php
     *
     * @param ListServicesRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listServices(ListServicesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListServices', $request, $callOptions);
    }

    /**
     * Creates a new service configuration (version) for a managed service based
     * on
     * user-supplied configuration source files (for example: OpenAPI
     * Specification). This method stores the source configurations as well as the
     * generated service configuration. To rollout the service configuration to
     * other services,
     * please call
     * [CreateServiceRollout][google.api.servicemanagement.v1.ServiceManager.CreateServiceRollout].
     *
     * Only the 100 most recent configuration sources and ones referenced by
     * existing service configurtions are kept for each service. The rest will be
     * deleted eventually.
     *
     * Operation<response: SubmitConfigSourceResponse>
     *
     * The async variant is {@see ServiceManagerClient::submitConfigSourceAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/submit_config_source.php
     *
     * @param SubmitConfigSourceRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function submitConfigSource(SubmitConfigSourceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SubmitConfigSource', $request, $callOptions)->wait();
    }

    /**
     * Revives a previously deleted managed service. The method restores the
     * service using the configuration at the time the service was deleted.
     * The target service must exist and must have been deleted within the
     * last 30 days.
     *
     * Operation<response: UndeleteServiceResponse>
     *
     * The async variant is {@see ServiceManagerClient::undeleteServiceAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/undelete_service.php
     *
     * @param UndeleteServiceRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function undeleteService(UndeleteServiceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UndeleteService', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see ServiceManagerClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see ServiceManagerClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see ServiceManagerClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/ServiceManagerClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
