<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/endpoint.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Endpoint
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EncryptionSpec::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MachineResources::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/aiplatform/v1/endpoint.protogoogle.cloud.aiplatform.v1google/api/resource.proto0google/cloud/aiplatform/v1/encryption_spec.proto,google/cloud/aiplatform/v1/explanation.proto#google/cloud/aiplatform/v1/io.proto2google/cloud/aiplatform/v1/machine_resources.protogoogle/protobuf/timestamp.proto"�
Endpoint
name (	B�A
display_name (	B�A
description (	G
deployed_models (2).google.cloud.aiplatform.v1.DeployedModelB�AM
traffic_split (26.google.cloud.aiplatform.v1.Endpoint.TrafficSplitEntry
etag (	@
labels (20.google.cloud.aiplatform.v1.Endpoint.LabelsEntry4
create_time (2.google.protobuf.TimestampB�A4
update_time	 (2.google.protobuf.TimestampB�AC
encryption_spec
 (2*.google.cloud.aiplatform.v1.EncryptionSpec7
network (	B&�A�A 
compute.googleapis.com/Network*
enable_private_service_connect (Bg
model_deployment_monitoring_job (	B>�A�A8
6aiplatform.googleapis.com/ModelDeploymentMonitoringJobp
\'predict_request_response_logging_config (2?.google.cloud.aiplatform.v1.PredictRequestResponseLoggingConfig3
TrafficSplitEntry
key (	
value (:8-
LabelsEntry
key (	
value (	:8:��A�
"aiplatform.googleapis.com/Endpoint<projects/{project}/locations/{location}/endpoints/{endpoint}Mprojects/{project}/locations/{location}/publishers/{publisher}/models/{model}"�
DeployedModelM
dedicated_resources (2..google.cloud.aiplatform.v1.DedicatedResourcesH M
automatic_resources (2..google.cloud.aiplatform.v1.AutomaticResourcesH Q
shared_resources (	B5�A2
0aiplatform.googleapis.com/DeploymentResourcePoolH 
id (	B�A6
model (	B\'�A�A!
aiplatform.googleapis.com/Model
model_version_id (	B�A
display_name (	4
create_time (2.google.protobuf.TimestampB�AE
explanation_spec	 (2+.google.cloud.aiplatform.v1.ExplanationSpec
service_account (	!
disable_container_logging (
enable_access_logging (L
private_endpoints (2,.google.cloud.aiplatform.v1.PrivateEndpointsB�AB
prediction_resources"�
PrivateEndpoints
predict_http_uri (	B�A
explain_http_uri (	B�A
health_http_uri (	B�A
service_attachment (	B�A"�
#PredictRequestResponseLoggingConfig
enabled (
sampling_rate (M
bigquery_destination (2/.google.cloud.aiplatform.v1.BigQueryDestinationB�
com.google.cloud.aiplatform.v1BEndpointProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

