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

// [START aiplatform_v1_generated_TensorboardService_GetTensorboardTimeSeries_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AIPlatform\V1\Client\TensorboardServiceClient;
use Google\Cloud\AIPlatform\V1\GetTensorboardTimeSeriesRequest;
use Google\Cloud\AIPlatform\V1\TensorboardTimeSeries;

/**
 * Gets a TensorboardTimeSeries.
 *
 * @param string $formattedName The name of the TensorboardTimeSeries resource.
 *                              Format:
 *                              `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
 *                              Please see {@see TensorboardServiceClient::tensorboardTimeSeriesName()} for help formatting this field.
 */
function get_tensorboard_time_series_sample(string $formattedName): void
{
    // Create a client.
    $tensorboardServiceClient = new TensorboardServiceClient();

    // Prepare the request message.
    $request = (new GetTensorboardTimeSeriesRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var TensorboardTimeSeries $response */
        $response = $tensorboardServiceClient->getTensorboardTimeSeries($request);
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
    $formattedName = TensorboardServiceClient::tensorboardTimeSeriesName(
        '[PROJECT]',
        '[LOCATION]',
        '[TENSORBOARD]',
        '[EXPERIMENT]',
        '[RUN]',
        '[TIME_SERIES]'
    );

    get_tensorboard_time_series_sample($formattedName);
}
// [END aiplatform_v1_generated_TensorboardService_GetTensorboardTimeSeries_sync]
