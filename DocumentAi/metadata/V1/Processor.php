<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/processor.proto

namespace GPBMetadata\Google\Cloud\Documentai\V1;

class Processor
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentSchema::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\Evaluation::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/documentai/v1/processor.protogoogle.cloud.documentai.v1google/api/resource.proto0google/cloud/documentai/v1/document_schema.proto+google/cloud/documentai/v1/evaluation.protogoogle/protobuf/timestamp.proto"�
ProcessorVersion
name (	B�A
display_name (	C
document_schema (2*.google.cloud.documentai.v1.DocumentSchemaF
state (22.google.cloud.documentai.v1.ProcessorVersion.StateB�A/
create_time (2.google.protobuf.TimestampJ
latest_evaluation (2/.google.cloud.documentai.v1.EvaluationReference
kms_key_name	 (	
kms_key_version_name
 (	
google_managed (B�AV
deprecation_info (2<.google.cloud.documentai.v1.ProcessorVersion.DeprecationInfoO

model_type (26.google.cloud.documentai.v1.ProcessorVersion.ModelTypeB�A�
DeprecationInfo4
deprecation_time (2.google.protobuf.TimestampV
replacement_processor_version (	B/�A,
*documentai.googleapis.com/ProcessorVersion"�
State
STATE_UNSPECIFIED 
DEPLOYED
	DEPLOYING

UNDEPLOYED
UNDEPLOYING
CREATING
DELETING

FAILED
	IMPORTING"Y
	ModelType
MODEL_TYPE_UNSPECIFIED 
MODEL_TYPE_GENERATIVE
MODEL_TYPE_CUSTOM:��A�
*documentai.googleapis.com/ProcessorVersiondprojects/{project}/locations/{location}/processors/{processor}/processorVersions/{processor_version}"r
ProcessorVersionAlias
alias (	J
processor_version (	B/�A,
*documentai.googleapis.com/ProcessorVersion"�
	Processor
name (	B�A�A
type (	
display_name (	?
state (2+.google.cloud.documentai.v1.Processor.StateB�AR
default_processor_version	 (	B/�A,
*documentai.googleapis.com/ProcessorVersionY
processor_version_aliases
 (21.google.cloud.documentai.v1.ProcessorVersionAliasB�A 
process_endpoint (	B�A�A/
create_time (2.google.protobuf.Timestamp
kms_key_name (	"~
State
STATE_UNSPECIFIED 
ENABLED
DISABLED
ENABLING
	DISABLING
CREATING

FAILED
DELETING:h�Ae
#documentai.googleapis.com/Processor>projects/{project}/locations/{location}/processors/{processor}B�
com.google.cloud.documentai.v1BDocumentAiProcessorPZ>cloud.google.com/go/documentai/apiv1/documentaipb;documentaipb�Google.Cloud.DocumentAI.V1�Google\\Cloud\\DocumentAI\\V1�Google::Cloud::DocumentAI::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

