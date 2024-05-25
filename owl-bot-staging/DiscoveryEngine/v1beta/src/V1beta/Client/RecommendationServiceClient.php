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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/discoveryengine/v1beta/recommendation_service.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\DiscoveryEngine\V1beta\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\DiscoveryEngine\V1beta\RecommendRequest;
use Google\Cloud\DiscoveryEngine\V1beta\RecommendResponse;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for making recommendations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @experimental
 *
 * @method PromiseInterface recommendAsync(RecommendRequest $request, array $optionalArgs = [])
 */
final class RecommendationServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.discoveryengine.v1beta.RecommendationService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'discoveryengine.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'discoveryengine.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/recommendation_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/recommendation_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/recommendation_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/recommendation_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a document
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $branch
     * @param string $document
     *
     * @return string The formatted document resource.
     *
     * @experimental
     */
    public static function documentName(string $project, string $location, string $dataStore, string $branch, string $document): string
    {
        return self::getPathTemplate('document')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'branch' => $branch,
            'document' => $document,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_collection_data_store_branch_document resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     * @param string $dataStore
     * @param string $branch
     * @param string $document
     *
     * @return string The formatted project_location_collection_data_store_branch_document resource.
     *
     * @experimental
     */
    public static function projectLocationCollectionDataStoreBranchDocumentName(string $project, string $location, string $collection, string $dataStore, string $branch, string $document): string
    {
        return self::getPathTemplate('projectLocationCollectionDataStoreBranchDocument')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
            'data_store' => $dataStore,
            'branch' => $branch,
            'document' => $document,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_collection_data_store_serving_config resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     * @param string $dataStore
     * @param string $servingConfig
     *
     * @return string The formatted project_location_collection_data_store_serving_config resource.
     *
     * @experimental
     */
    public static function projectLocationCollectionDataStoreServingConfigName(string $project, string $location, string $collection, string $dataStore, string $servingConfig): string
    {
        return self::getPathTemplate('projectLocationCollectionDataStoreServingConfig')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
            'data_store' => $dataStore,
            'serving_config' => $servingConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_collection_engine_serving_config resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     * @param string $engine
     * @param string $servingConfig
     *
     * @return string The formatted project_location_collection_engine_serving_config resource.
     *
     * @experimental
     */
    public static function projectLocationCollectionEngineServingConfigName(string $project, string $location, string $collection, string $engine, string $servingConfig): string
    {
        return self::getPathTemplate('projectLocationCollectionEngineServingConfig')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
            'engine' => $engine,
            'serving_config' => $servingConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_data_store_branch_document resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $branch
     * @param string $document
     *
     * @return string The formatted project_location_data_store_branch_document resource.
     *
     * @experimental
     */
    public static function projectLocationDataStoreBranchDocumentName(string $project, string $location, string $dataStore, string $branch, string $document): string
    {
        return self::getPathTemplate('projectLocationDataStoreBranchDocument')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'branch' => $branch,
            'document' => $document,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_data_store_serving_config resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $servingConfig
     *
     * @return string The formatted project_location_data_store_serving_config resource.
     *
     * @experimental
     */
    public static function projectLocationDataStoreServingConfigName(string $project, string $location, string $dataStore, string $servingConfig): string
    {
        return self::getPathTemplate('projectLocationDataStoreServingConfig')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'serving_config' => $servingConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * serving_config resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $servingConfig
     *
     * @return string The formatted serving_config resource.
     *
     * @experimental
     */
    public static function servingConfigName(string $project, string $location, string $dataStore, string $servingConfig): string
    {
        return self::getPathTemplate('servingConfig')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'serving_config' => $servingConfig,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - document: projects/{project}/locations/{location}/dataStores/{data_store}/branches/{branch}/documents/{document}
     * - projectLocationCollectionDataStoreBranchDocument: projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document}
     * - projectLocationCollectionDataStoreServingConfig: projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/servingConfigs/{serving_config}
     * - projectLocationCollectionEngineServingConfig: projects/{project}/locations/{location}/collections/{collection}/engines/{engine}/servingConfigs/{serving_config}
     * - projectLocationDataStoreBranchDocument: projects/{project}/locations/{location}/dataStores/{data_store}/branches/{branch}/documents/{document}
     * - projectLocationDataStoreServingConfig: projects/{project}/locations/{location}/dataStores/{data_store}/servingConfigs/{serving_config}
     * - servingConfig: projects/{project}/locations/{location}/dataStores/{data_store}/servingConfigs/{serving_config}
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
     *
     * @experimental
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'discoveryengine.googleapis.com:443'.
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
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
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
     * Makes a recommendation, which requires a contextual user event.
     *
     * The async variant is {@see RecommendationServiceClient::recommendAsync()} .
     *
     * @example samples/V1beta/RecommendationServiceClient/recommend.php
     *
     * @param RecommendRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return RecommendResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function recommend(RecommendRequest $request, array $callOptions = []): RecommendResponse
    {
        return $this->startApiCall('Recommend', $request, $callOptions)->wait();
    }
}
