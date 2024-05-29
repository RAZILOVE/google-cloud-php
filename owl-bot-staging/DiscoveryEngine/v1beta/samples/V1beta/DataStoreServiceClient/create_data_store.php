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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START discoveryengine_v1beta_generated_DataStoreService_CreateDataStore_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\DiscoveryEngine\V1beta\Client\DataStoreServiceClient;
use Google\Cloud\DiscoveryEngine\V1beta\CreateDataStoreRequest;
use Google\Cloud\DiscoveryEngine\V1beta\DataStore;
use Google\Rpc\Status;

/**
 * Creates a [DataStore][google.cloud.discoveryengine.v1beta.DataStore].
 *
 * DataStore is for storing
 * [Documents][google.cloud.discoveryengine.v1beta.Document]. To serve these
 * documents for Search, or Recommendation use case, an
 * [Engine][google.cloud.discoveryengine.v1beta.Engine] needs to be created
 * separately.
 *
 * @param string $formattedParent      The parent resource name, such as
 *                                     `projects/{project}/locations/{location}/collections/{collection}`. Please see
 *                                     {@see DataStoreServiceClient::collectionName()} for help formatting this field.
 * @param string $dataStoreDisplayName The data store display name.
 *
 *                                     This field must be a UTF-8 encoded string with a length limit of 128
 *                                     characters. Otherwise, an INVALID_ARGUMENT error is returned.
 * @param string $dataStoreId          The ID to use for the
 *                                     [DataStore][google.cloud.discoveryengine.v1beta.DataStore], which will
 *                                     become the final component of the
 *                                     [DataStore][google.cloud.discoveryengine.v1beta.DataStore]'s resource name.
 *
 *                                     This field must conform to [RFC-1034](https://tools.ietf.org/html/rfc1034)
 *                                     standard with a length limit of 63 characters. Otherwise, an
 *                                     INVALID_ARGUMENT error is returned.
 */
function create_data_store_sample(
    string $formattedParent,
    string $dataStoreDisplayName,
    string $dataStoreId
): void {
    // Create a client.
    $dataStoreServiceClient = new DataStoreServiceClient();

    // Prepare the request message.
    $dataStore = (new DataStore())
        ->setDisplayName($dataStoreDisplayName);
    $request = (new CreateDataStoreRequest())
        ->setParent($formattedParent)
        ->setDataStore($dataStore)
        ->setDataStoreId($dataStoreId);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $dataStoreServiceClient->createDataStore($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var DataStore $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = DataStoreServiceClient::collectionName(
        '[PROJECT]',
        '[LOCATION]',
        '[COLLECTION]'
    );
    $dataStoreDisplayName = '[DISPLAY_NAME]';
    $dataStoreId = '[DATA_STORE_ID]';

    create_data_store_sample($formattedParent, $dataStoreDisplayName, $dataStoreId);
}
// [END discoveryengine_v1beta_generated_DataStoreService_CreateDataStore_sync]
