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

// [START aiplatform_v1_generated_FeatureOnlineStoreAdminService_ListFeatureViewSyncs_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\AIPlatform\V1\Client\FeatureOnlineStoreAdminServiceClient;
use Google\Cloud\AIPlatform\V1\FeatureViewSync;
use Google\Cloud\AIPlatform\V1\ListFeatureViewSyncsRequest;

/**
 * Lists FeatureViewSyncs in a given FeatureView.
 *
 * @param string $formattedParent The resource name of the FeatureView to list FeatureViewSyncs.
 *                                Format:
 *                                `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}`
 *                                Please see {@see FeatureOnlineStoreAdminServiceClient::featureViewName()} for help formatting this field.
 */
function list_feature_view_syncs_sample(string $formattedParent): void
{
    // Create a client.
    $featureOnlineStoreAdminServiceClient = new FeatureOnlineStoreAdminServiceClient();

    // Prepare the request message.
    $request = (new ListFeatureViewSyncsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $featureOnlineStoreAdminServiceClient->listFeatureViewSyncs($request);

        /** @var FeatureViewSync $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
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
    $formattedParent = FeatureOnlineStoreAdminServiceClient::featureViewName(
        '[PROJECT]',
        '[LOCATION]',
        '[FEATURE_ONLINE_STORE]',
        '[FEATURE_VIEW]'
    );

    list_feature_view_syncs_sample($formattedParent);
}
// [END aiplatform_v1_generated_FeatureOnlineStoreAdminService_ListFeatureViewSyncs_sync]
