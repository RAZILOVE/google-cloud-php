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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/discoveryengine/v1/document_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\DiscoveryEngine\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\DiscoveryEngine\V1\CreateDocumentRequest;
use Google\Cloud\DiscoveryEngine\V1\DeleteDocumentRequest;
use Google\Cloud\DiscoveryEngine\V1\Document;
use Google\Cloud\DiscoveryEngine\V1\GetDocumentRequest;
use Google\Cloud\DiscoveryEngine\V1\ImportDocumentsRequest;
use Google\Cloud\DiscoveryEngine\V1\ListDocumentsRequest;
use Google\Cloud\DiscoveryEngine\V1\PurgeDocumentsRequest;
use Google\Cloud\DiscoveryEngine\V1\UpdateDocumentRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for ingesting [Document][google.cloud.discoveryengine.v1.Document]
 * information of the customer's website.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createDocumentAsync(CreateDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDocumentAsync(DeleteDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDocumentAsync(GetDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface importDocumentsAsync(ImportDocumentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDocumentsAsync(ListDocumentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface purgeDocumentsAsync(PurgeDocumentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDocumentAsync(UpdateDocumentRequest $request, array $optionalArgs = [])
 */
final class DocumentServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.discoveryengine.v1.DocumentService';

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
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/document_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/document_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/document_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/document_service_rest_client_config.php',
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
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a branch
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $branch
     *
     * @return string The formatted branch resource.
     */
    public static function branchName(string $project, string $location, string $dataStore, string $branch): string
    {
        return self::getPathTemplate('branch')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'branch' => $branch,
        ]);
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
     */
    public static function documentName(
        string $project,
        string $location,
        string $dataStore,
        string $branch,
        string $document
    ): string {
        return self::getPathTemplate('document')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'branch' => $branch,
            'document' => $document,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a fhir_store
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataset
     * @param string $fhirStore
     *
     * @return string The formatted fhir_store resource.
     */
    public static function fhirStoreName(string $project, string $location, string $dataset, string $fhirStore): string
    {
        return self::getPathTemplate('fhirStore')->render([
            'project' => $project,
            'location' => $location,
            'dataset' => $dataset,
            'fhir_store' => $fhirStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_collection_data_store_branch resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     * @param string $dataStore
     * @param string $branch
     *
     * @return string The formatted project_location_collection_data_store_branch resource.
     */
    public static function projectLocationCollectionDataStoreBranchName(
        string $project,
        string $location,
        string $collection,
        string $dataStore,
        string $branch
    ): string {
        return self::getPathTemplate('projectLocationCollectionDataStoreBranch')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
            'data_store' => $dataStore,
            'branch' => $branch,
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
     */
    public static function projectLocationCollectionDataStoreBranchDocumentName(
        string $project,
        string $location,
        string $collection,
        string $dataStore,
        string $branch,
        string $document
    ): string {
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
     * project_location_data_store_branch resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $branch
     *
     * @return string The formatted project_location_data_store_branch resource.
     */
    public static function projectLocationDataStoreBranchName(
        string $project,
        string $location,
        string $dataStore,
        string $branch
    ): string {
        return self::getPathTemplate('projectLocationDataStoreBranch')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'branch' => $branch,
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
     */
    public static function projectLocationDataStoreBranchDocumentName(
        string $project,
        string $location,
        string $dataStore,
        string $branch,
        string $document
    ): string {
        return self::getPathTemplate('projectLocationDataStoreBranchDocument')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'branch' => $branch,
            'document' => $document,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - branch: projects/{project}/locations/{location}/dataStores/{data_store}/branches/{branch}
     * - document: projects/{project}/locations/{location}/dataStores/{data_store}/branches/{branch}/documents/{document}
     * - fhirStore: projects/{project}/locations/{location}/datasets/{dataset}/fhirStores/{fhir_store}
     * - projectLocationCollectionDataStoreBranch: projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}
     * - projectLocationCollectionDataStoreBranchDocument: projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document}
     * - projectLocationDataStoreBranch: projects/{project}/locations/{location}/dataStores/{data_store}/branches/{branch}
     * - projectLocationDataStoreBranchDocument: projects/{project}/locations/{location}/dataStores/{data_store}/branches/{branch}/documents/{document}
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
     * Creates a [Document][google.cloud.discoveryengine.v1.Document].
     *
     * The async variant is {@see DocumentServiceClient::createDocumentAsync()} .
     *
     * @example samples/V1/DocumentServiceClient/create_document.php
     *
     * @param CreateDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Document
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createDocument(CreateDocumentRequest $request, array $callOptions = []): Document
    {
        return $this->startApiCall('CreateDocument', $request, $callOptions)->wait();
    }

    /**
     * Deletes a [Document][google.cloud.discoveryengine.v1.Document].
     *
     * The async variant is {@see DocumentServiceClient::deleteDocumentAsync()} .
     *
     * @example samples/V1/DocumentServiceClient/delete_document.php
     *
     * @param DeleteDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteDocument(DeleteDocumentRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteDocument', $request, $callOptions)->wait();
    }

    /**
     * Gets a [Document][google.cloud.discoveryengine.v1.Document].
     *
     * The async variant is {@see DocumentServiceClient::getDocumentAsync()} .
     *
     * @example samples/V1/DocumentServiceClient/get_document.php
     *
     * @param GetDocumentRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Document
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDocument(GetDocumentRequest $request, array $callOptions = []): Document
    {
        return $this->startApiCall('GetDocument', $request, $callOptions)->wait();
    }

    /**
     * Bulk import of multiple
     * [Document][google.cloud.discoveryengine.v1.Document]s. Request processing
     * may be synchronous. Non-existing items are created.
     *
     * Note: It is possible for a subset of the
     * [Document][google.cloud.discoveryengine.v1.Document]s to be successfully
     * updated.
     *
     * The async variant is {@see DocumentServiceClient::importDocumentsAsync()} .
     *
     * @example samples/V1/DocumentServiceClient/import_documents.php
     *
     * @param ImportDocumentsRequest $request     A request to house fields associated with the call.
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
    public function importDocuments(ImportDocumentsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ImportDocuments', $request, $callOptions)->wait();
    }

    /**
     * Gets a list of [Document][google.cloud.discoveryengine.v1.Document]s.
     *
     * The async variant is {@see DocumentServiceClient::listDocumentsAsync()} .
     *
     * @example samples/V1/DocumentServiceClient/list_documents.php
     *
     * @param ListDocumentsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
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
    public function listDocuments(ListDocumentsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDocuments', $request, $callOptions);
    }

    /**
     * Permanently deletes all selected
     * [Document][google.cloud.discoveryengine.v1.Document]s in a branch.
     *
     * This process is asynchronous. Depending on the number of
     * [Document][google.cloud.discoveryengine.v1.Document]s to be deleted, this
     * operation can take hours to complete. Before the delete operation
     * completes, some [Document][google.cloud.discoveryengine.v1.Document]s might
     * still be returned by
     * [DocumentService.GetDocument][google.cloud.discoveryengine.v1.DocumentService.GetDocument]
     * or
     * [DocumentService.ListDocuments][google.cloud.discoveryengine.v1.DocumentService.ListDocuments].
     *
     * To get a list of the [Document][google.cloud.discoveryengine.v1.Document]s
     * to be deleted, set
     * [PurgeDocumentsRequest.force][google.cloud.discoveryengine.v1.PurgeDocumentsRequest.force]
     * to false.
     *
     * The async variant is {@see DocumentServiceClient::purgeDocumentsAsync()} .
     *
     * @example samples/V1/DocumentServiceClient/purge_documents.php
     *
     * @param PurgeDocumentsRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function purgeDocuments(PurgeDocumentsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('PurgeDocuments', $request, $callOptions)->wait();
    }

    /**
     * Updates a [Document][google.cloud.discoveryengine.v1.Document].
     *
     * The async variant is {@see DocumentServiceClient::updateDocumentAsync()} .
     *
     * @example samples/V1/DocumentServiceClient/update_document.php
     *
     * @param UpdateDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Document
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateDocument(UpdateDocumentRequest $request, array $callOptions = []): Document
    {
        return $this->startApiCall('UpdateDocument', $request, $callOptions)->wait();
    }
}
