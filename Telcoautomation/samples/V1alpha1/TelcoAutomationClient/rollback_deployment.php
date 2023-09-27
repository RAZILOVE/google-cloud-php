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

// [START telcoautomation_v1alpha1_generated_TelcoAutomation_RollbackDeployment_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Telcoautomation\V1alpha1\Client\TelcoAutomationClient;
use Google\Cloud\Telcoautomation\V1alpha1\Deployment;
use Google\Cloud\Telcoautomation\V1alpha1\RollbackDeploymentRequest;

/**
 * Rollback the active deployment to the given past approved deployment
 * revision.
 *
 * @param string $formattedName Name of the deployment. Please see
 *                              {@see TelcoAutomationClient::deploymentName()} for help formatting this field.
 * @param string $revisionId    The revision id of deployment to roll back to.
 */
function rollback_deployment_sample(string $formattedName, string $revisionId): void
{
    // Create a client.
    $telcoAutomationClient = new TelcoAutomationClient();

    // Prepare the request message.
    $request = (new RollbackDeploymentRequest())
        ->setName($formattedName)
        ->setRevisionId($revisionId);

    // Call the API and handle any network failures.
    try {
        /** @var Deployment $response */
        $response = $telcoAutomationClient->rollbackDeployment($request);
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
    $formattedName = TelcoAutomationClient::deploymentName(
        '[PROJECT]',
        '[LOCATION]',
        '[ORCHESTRATION_CLUSTER]',
        '[DEPLOYMENT]'
    );
    $revisionId = '[REVISION_ID]';

    rollback_deployment_sample($formattedName, $revisionId);
}
// [END telcoautomation_v1alpha1_generated_TelcoAutomation_RollbackDeployment_sync]
