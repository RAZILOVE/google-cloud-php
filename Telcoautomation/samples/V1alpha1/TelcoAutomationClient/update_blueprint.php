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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START telcoautomation_v1alpha1_generated_TelcoAutomation_UpdateBlueprint_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Telcoautomation\V1alpha1\Blueprint;
use Google\Cloud\Telcoautomation\V1alpha1\Client\TelcoAutomationClient;
use Google\Cloud\Telcoautomation\V1alpha1\UpdateBlueprintRequest;
use Google\Protobuf\FieldMask;

/**
 * Updates a blueprint.
 *
 * @param string $blueprintSourceBlueprint Immutable. The public blueprint ID from which this blueprint was
 *                                         created.
 */
function update_blueprint_sample(string $blueprintSourceBlueprint): void
{
    // Create a client.
    $telcoAutomationClient = new TelcoAutomationClient();

    // Prepare the request message.
    $blueprint = (new Blueprint())
        ->setSourceBlueprint($blueprintSourceBlueprint);
    $updateMask = new FieldMask();
    $request = (new UpdateBlueprintRequest())
        ->setBlueprint($blueprint)
        ->setUpdateMask($updateMask);

    // Call the API and handle any network failures.
    try {
        /** @var Blueprint $response */
        $response = $telcoAutomationClient->updateBlueprint($request);
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
    $blueprintSourceBlueprint = '[SOURCE_BLUEPRINT]';

    update_blueprint_sample($blueprintSourceBlueprint);
}
// [END telcoautomation_v1alpha1_generated_TelcoAutomation_UpdateBlueprint_sync]
