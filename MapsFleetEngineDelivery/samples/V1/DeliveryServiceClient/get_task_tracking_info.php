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

// [START fleetengine_v1_generated_DeliveryService_GetTaskTrackingInfo_sync]
use Google\ApiCore\ApiException;
use Google\Maps\FleetEngine\Delivery\V1\Client\DeliveryServiceClient;
use Google\Maps\FleetEngine\Delivery\V1\GetTaskTrackingInfoRequest;
use Google\Maps\FleetEngine\Delivery\V1\TaskTrackingInfo;

/**
 * Returns the specified `TaskTrackingInfo` instance.
 *
 * @param string $formattedName Must be in the format
 *                              `providers/{provider}/taskTrackingInfo/{tracking_id}`. The `provider`
 *                              must be the Google Cloud Project ID, and the `tracking_id` must be the
 *                              tracking ID associated with the task. An example name can be
 *                              `providers/sample-cloud-project/taskTrackingInfo/sample-tracking-id`. Please see
 *                              {@see DeliveryServiceClient::taskTrackingInfoName()} for help formatting this field.
 */
function get_task_tracking_info_sample(string $formattedName): void
{
    // Create a client.
    $deliveryServiceClient = new DeliveryServiceClient();

    // Prepare the request message.
    $request = (new GetTaskTrackingInfoRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var TaskTrackingInfo $response */
        $response = $deliveryServiceClient->getTaskTrackingInfo($request);
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
    $formattedName = DeliveryServiceClient::taskTrackingInfoName('[PROVIDER]', '[TRACKING]');

    get_task_tracking_info_sample($formattedName);
}
// [END fleetengine_v1_generated_DeliveryService_GetTaskTrackingInfo_sync]
