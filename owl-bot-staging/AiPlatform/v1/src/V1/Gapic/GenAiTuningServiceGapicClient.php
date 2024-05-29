<?php
/*
 * Copyright 2024 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1/genai_tuning_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AIPlatform\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AIPlatform\V1\CancelTuningJobRequest;
use Google\Cloud\AIPlatform\V1\CreateTuningJobRequest;
use Google\Cloud\AIPlatform\V1\GetTuningJobRequest;
use Google\Cloud\AIPlatform\V1\ListTuningJobsRequest;
use Google\Cloud\AIPlatform\V1\ListTuningJobsResponse;
use Google\Cloud\AIPlatform\V1\TuningJob;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\GetPolicyOptions;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: A service for creating and managing GenAI Tuning Jobs.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $genAiTuningServiceClient = new GenAiTuningServiceClient();
 * try {
 *     $formattedName = $genAiTuningServiceClient->tuningJobName('[PROJECT]', '[LOCATION]', '[TUNING_JOB]');
 *     $genAiTuningServiceClient->cancelTuningJob($formattedName);
 * } finally {
 *     $genAiTuningServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @deprecated Please use the new service client {@see \Google\Cloud\AIPlatform\V1\Client\GenAiTuningServiceClient}.
 */
class GenAiTuningServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.aiplatform.v1.GenAiTuningService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'aiplatform.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $contextNameTemplate;

    private static $endpointNameTemplate;

    private static $locationNameTemplate;

    private static $modelNameTemplate;

    private static $projectLocationEndpointNameTemplate;

    private static $projectLocationPublisherModelNameTemplate;

    private static $tuningJobNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/gen_ai_tuning_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/gen_ai_tuning_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/gen_ai_tuning_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/gen_ai_tuning_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getContextNameTemplate()
    {
        if (self::$contextNameTemplate == null) {
            self::$contextNameTemplate = new PathTemplate('projects/{project}/locations/{location}/metadataStores/{metadata_store}/contexts/{context}');
        }

        return self::$contextNameTemplate;
    }

    private static function getEndpointNameTemplate()
    {
        if (self::$endpointNameTemplate == null) {
            self::$endpointNameTemplate = new PathTemplate('projects/{project}/locations/{location}/endpoints/{endpoint}');
        }

        return self::$endpointNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getModelNameTemplate()
    {
        if (self::$modelNameTemplate == null) {
            self::$modelNameTemplate = new PathTemplate('projects/{project}/locations/{location}/models/{model}');
        }

        return self::$modelNameTemplate;
    }

    private static function getProjectLocationEndpointNameTemplate()
    {
        if (self::$projectLocationEndpointNameTemplate == null) {
            self::$projectLocationEndpointNameTemplate = new PathTemplate('projects/{project}/locations/{location}/endpoints/{endpoint}');
        }

        return self::$projectLocationEndpointNameTemplate;
    }

    private static function getProjectLocationPublisherModelNameTemplate()
    {
        if (self::$projectLocationPublisherModelNameTemplate == null) {
            self::$projectLocationPublisherModelNameTemplate = new PathTemplate('projects/{project}/locations/{location}/publishers/{publisher}/models/{model}');
        }

        return self::$projectLocationPublisherModelNameTemplate;
    }

    private static function getTuningJobNameTemplate()
    {
        if (self::$tuningJobNameTemplate == null) {
            self::$tuningJobNameTemplate = new PathTemplate('projects/{project}/locations/{location}/tuningJobs/{tuning_job}');
        }

        return self::$tuningJobNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'context' => self::getContextNameTemplate(),
                'endpoint' => self::getEndpointNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'model' => self::getModelNameTemplate(),
                'projectLocationEndpoint' => self::getProjectLocationEndpointNameTemplate(),
                'projectLocationPublisherModel' => self::getProjectLocationPublisherModelNameTemplate(),
                'tuningJob' => self::getTuningJobNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a context
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     * @param string $context
     *
     * @return string The formatted context resource.
     */
    public static function contextName($project, $location, $metadataStore, $context)
    {
        return self::getContextNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
            'context' => $context,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a endpoint
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted endpoint resource.
     */
    public static function endpointName($project, $location, $endpoint)
    {
        return self::getEndpointNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a model
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $model
     *
     * @return string The formatted model resource.
     */
    public static function modelName($project, $location, $model)
    {
        return self::getModelNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'model' => $model,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_endpoint resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted project_location_endpoint resource.
     */
    public static function projectLocationEndpointName($project, $location, $endpoint)
    {
        return self::getProjectLocationEndpointNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_publisher_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $publisher
     * @param string $model
     *
     * @return string The formatted project_location_publisher_model resource.
     */
    public static function projectLocationPublisherModelName($project, $location, $publisher, $model)
    {
        return self::getProjectLocationPublisherModelNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'publisher' => $publisher,
            'model' => $model,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a tuning_job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $tuningJob
     *
     * @return string The formatted tuning_job resource.
     */
    public static function tuningJobName($project, $location, $tuningJob)
    {
        return self::getTuningJobNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'tuning_job' => $tuningJob,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - context: projects/{project}/locations/{location}/metadataStores/{metadata_store}/contexts/{context}
     * - endpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - location: projects/{project}/locations/{location}
     * - model: projects/{project}/locations/{location}/models/{model}
     * - projectLocationEndpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - projectLocationPublisherModel: projects/{project}/locations/{location}/publishers/{publisher}/models/{model}
     * - tuningJob: projects/{project}/locations/{location}/tuningJobs/{tuning_job}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
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
    }

    /**
     * Cancels a TuningJob.
     * Starts asynchronous cancellation on the TuningJob. The server makes a best
     * effort to cancel the job, but success is not guaranteed. Clients can use
     * [GenAiTuningService.GetTuningJob][google.cloud.aiplatform.v1.GenAiTuningService.GetTuningJob]
     * or other methods to check whether the cancellation succeeded or whether the
     * job completed despite cancellation. On successful cancellation, the
     * TuningJob is not deleted; instead it becomes a job with a
     * [TuningJob.error][google.cloud.aiplatform.v1.TuningJob.error] value with a
     * [google.rpc.Status.code][google.rpc.Status.code] of 1, corresponding to
     * `Code.CANCELLED`, and
     * [TuningJob.state][google.cloud.aiplatform.v1.TuningJob.state] is set to
     * `CANCELLED`.
     *
     * Sample code:
     * ```
     * $genAiTuningServiceClient = new GenAiTuningServiceClient();
     * try {
     *     $formattedName = $genAiTuningServiceClient->tuningJobName('[PROJECT]', '[LOCATION]', '[TUNING_JOB]');
     *     $genAiTuningServiceClient->cancelTuningJob($formattedName);
     * } finally {
     *     $genAiTuningServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the TuningJob to cancel. Format:
     *                             `projects/{project}/locations/{location}/tuningJobs/{tuning_job}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function cancelTuningJob($name, array $optionalArgs = [])
    {
        $request = new CancelTuningJobRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CancelTuningJob', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Creates a TuningJob. A created TuningJob right away will be attempted to
     * be run.
     *
     * Sample code:
     * ```
     * $genAiTuningServiceClient = new GenAiTuningServiceClient();
     * try {
     *     $formattedParent = $genAiTuningServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $tuningJob = new TuningJob();
     *     $response = $genAiTuningServiceClient->createTuningJob($formattedParent, $tuningJob);
     * } finally {
     *     $genAiTuningServiceClient->close();
     * }
     * ```
     *
     * @param string    $parent       Required. The resource name of the Location to create the TuningJob in.
     *                                Format: `projects/{project}/locations/{location}`
     * @param TuningJob $tuningJob    Required. The TuningJob to create.
     * @param array     $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AIPlatform\V1\TuningJob
     *
     * @throws ApiException if the remote call fails
     */
    public function createTuningJob($parent, $tuningJob, array $optionalArgs = [])
    {
        $request = new CreateTuningJobRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setTuningJob($tuningJob);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateTuningJob', TuningJob::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a TuningJob.
     *
     * Sample code:
     * ```
     * $genAiTuningServiceClient = new GenAiTuningServiceClient();
     * try {
     *     $formattedName = $genAiTuningServiceClient->tuningJobName('[PROJECT]', '[LOCATION]', '[TUNING_JOB]');
     *     $response = $genAiTuningServiceClient->getTuningJob($formattedName);
     * } finally {
     *     $genAiTuningServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the TuningJob resource. Format:
     *                             `projects/{project}/locations/{location}/tuningJobs/{tuning_job}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AIPlatform\V1\TuningJob
     *
     * @throws ApiException if the remote call fails
     */
    public function getTuningJob($name, array $optionalArgs = [])
    {
        $request = new GetTuningJobRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetTuningJob', TuningJob::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists TuningJobs in a Location.
     *
     * Sample code:
     * ```
     * $genAiTuningServiceClient = new GenAiTuningServiceClient();
     * try {
     *     $formattedParent = $genAiTuningServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $genAiTuningServiceClient->listTuningJobs($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $genAiTuningServiceClient->listTuningJobs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $genAiTuningServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the Location to list the TuningJobs from.
     *                             Format: `projects/{project}/locations/{location}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $filter
     *           Optional. The standard list filter.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listTuningJobs($parent, array $optionalArgs = [])
    {
        $request = new ListTuningJobsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListTuningJobs', $optionalArgs, ListTuningJobsResponse::class, $request);
    }

    /**
     * Gets information about a location.
     *
     * Sample code:
     * ```
     * $genAiTuningServiceClient = new GenAiTuningServiceClient();
     * try {
     *     $response = $genAiTuningServiceClient->getLocation();
     * } finally {
     *     $genAiTuningServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Resource name for the location.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Location\Location
     *
     * @throws ApiException if the remote call fails
     */
    public function getLocation(array $optionalArgs = [])
    {
        $request = new GetLocationRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetLocation', Location::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.cloud.location.Locations')->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * Sample code:
     * ```
     * $genAiTuningServiceClient = new GenAiTuningServiceClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $genAiTuningServiceClient->listLocations();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $genAiTuningServiceClient->listLocations();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $genAiTuningServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           The resource that owns the locations collection, if applicable.
     *     @type string $filter
     *           The standard list filter.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listLocations(array $optionalArgs = [])
    {
        $request = new ListLocationsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListLocations', $optionalArgs, ListLocationsResponse::class, $request, 'google.cloud.location.Locations');
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * Sample code:
     * ```
     * $genAiTuningServiceClient = new GenAiTuningServiceClient();
     * try {
     *     $resource = 'resource';
     *     $response = $genAiTuningServiceClient->getIamPolicy($resource);
     * } finally {
     *     $genAiTuningServiceClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being requested.
     *                             See the operation documentation for the appropriate value for this field.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type GetPolicyOptions $options
     *           OPTIONAL: A `GetPolicyOptions` object for specifying options to
     *           `GetIamPolicy`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getIamPolicy($resource, array $optionalArgs = [])
    {
        $request = new GetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['options'])) {
            $request->setOptions($optionalArgs['options']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetIamPolicy', Policy::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.iam.v1.IAMPolicy')->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * Sample code:
     * ```
     * $genAiTuningServiceClient = new GenAiTuningServiceClient();
     * try {
     *     $resource = 'resource';
     *     $policy = new Policy();
     *     $response = $genAiTuningServiceClient->setIamPolicy($resource, $policy);
     * } finally {
     *     $genAiTuningServiceClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being specified.
     *                             See the operation documentation for the appropriate value for this field.
     * @param Policy $policy       REQUIRED: The complete policy to be applied to the `resource`. The size of
     *                             the policy is limited to a few 10s of KB. An empty policy is a
     *                             valid policy but certain Cloud Platform services (such as Projects)
     *                             might reject them.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           OPTIONAL: A FieldMask specifying which fields of the policy to modify. Only
     *           the fields in the mask will be modified. If no mask is provided, the
     *           following default mask is used:
     *
     *           `paths: "bindings, etag"`
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function setIamPolicy($resource, $policy, array $optionalArgs = [])
    {
        $request = new SetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPolicy($policy);
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('SetIamPolicy', Policy::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.iam.v1.IAMPolicy')->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * Sample code:
     * ```
     * $genAiTuningServiceClient = new GenAiTuningServiceClient();
     * try {
     *     $resource = 'resource';
     *     $permissions = [];
     *     $response = $genAiTuningServiceClient->testIamPermissions($resource, $permissions);
     * } finally {
     *     $genAiTuningServiceClient->close();
     * }
     * ```
     *
     * @param string   $resource     REQUIRED: The resource for which the policy detail is being requested.
     *                               See the operation documentation for the appropriate value for this field.
     * @param string[] $permissions  The set of permissions to check for the `resource`. Permissions with
     *                               wildcards (such as '*' or 'storage.*') are not allowed. For more
     *                               information see
     *                               [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\TestIamPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function testIamPermissions($resource, $permissions, array $optionalArgs = [])
    {
        $request = new TestIamPermissionsRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPermissions($permissions);
        $requestParamHeaders['resource'] = $resource;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('TestIamPermissions', TestIamPermissionsResponse::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.iam.v1.IAMPolicy')->wait();
    }
}
