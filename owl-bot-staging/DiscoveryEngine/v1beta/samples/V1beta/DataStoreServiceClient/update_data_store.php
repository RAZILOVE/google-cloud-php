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

// [START discoveryengine_v1beta_generated_DataStoreService_UpdateDataStore_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DiscoveryEngine\V1beta\Client\DataStoreServiceClient;
use Google\Cloud\DiscoveryEngine\V1beta\DataStore;
use Google\Cloud\DiscoveryEngine\V1beta\UpdateDataStoreRequest;

/**
 * Updates a [DataStore][google.cloud.discoveryengine.v1beta.DataStore]
 *
 * @param string $dataStoreDisplayName The data store display name.
 *
 *                                     This field must be a UTF-8 encoded string with a length limit of 128
 *                                     characters. Otherwise, an INVALID_ARGUMENT error is returned.
 */
function update_data_store_sample(string $dataStoreDisplayName): void
{
    // Create a client.
    $dataStoreServiceClient = new DataStoreServiceClient();

    // Prepare the request message.
    $dataStore = (new DataStore())
        ->setDisplayName($dataStoreDisplayName);
    $request = (new UpdateDataStoreRequest())
        ->setDataStore($dataStore);

    // Call the API and handle any network failures.
    try {
        /** @var DataStore $response */
        $response = $dataStoreServiceClient->updateDataStore($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $dataStoreDisplayName = '[DISPLAY_NAME]';

    update_data_store_sample($dataStoreDisplayName);
}
// [END discoveryengine_v1beta_generated_DataStoreService_UpdateDataStore_sync]
