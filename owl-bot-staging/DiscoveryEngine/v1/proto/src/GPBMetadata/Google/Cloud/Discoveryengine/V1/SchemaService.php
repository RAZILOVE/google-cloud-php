<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/schema_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class SchemaService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Schema::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/discoveryengine/v1/schema_service.protogoogle.cloud.discoveryengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/discoveryengine/v1/schema.proto#google/longrunning/operations.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.proto"O
GetSchemaRequest;
name (	B-�A�A\'
%discoveryengine.googleapis.com/Schema"}
ListSchemasRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore
	page_size (

page_token (	"h
ListSchemasResponse8
schemas (2\'.google.cloud.discoveryengine.v1.Schema
next_page_token (	"�
CreateSchemaRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore<
schema (2\'.google.cloud.discoveryengine.v1.SchemaB�A
	schema_id (	B�A"j
UpdateSchemaRequest<
schema (2\'.google.cloud.discoveryengine.v1.SchemaB�A
allow_missing ("R
DeleteSchemaRequest;
name (	B-�A�A\'
%discoveryengine.googleapis.com/Schema"x
CreateSchemaMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp"x
UpdateSchemaMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp"x
DeleteSchemaMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp2�
SchemaService�
	GetSchema1.google.cloud.discoveryengine.v1.GetSchemaRequest\'.google.cloud.discoveryengine.v1.Schema"��Aname����8/v1/{name=projects/*/locations/*/dataStores/*/schemas/*}ZHF/v1/{name=projects/*/locations/*/collections/*/dataStores/*/schemas/*}�
ListSchemas3.google.cloud.discoveryengine.v1.ListSchemasRequest4.google.cloud.discoveryengine.v1.ListSchemasResponse"��Aparent����8/v1/{parent=projects/*/locations/*/dataStores/*}/schemasZHF/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/schemas�
CreateSchema4.google.cloud.discoveryengine.v1.CreateSchemaRequest.google.longrunning.Operation"��A^
&google.cloud.discoveryengine.v1.Schema4google.cloud.discoveryengine.v1.CreateSchemaMetadata�Aparent,schema,schema_id����"8/v1/{parent=projects/*/locations/*/dataStores/*}/schemas:schemaZP"F/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/schemas:schema�
UpdateSchema4.google.cloud.discoveryengine.v1.UpdateSchemaRequest.google.longrunning.Operation"��A^
&google.cloud.discoveryengine.v1.Schema4google.cloud.discoveryengine.v1.UpdateSchemaMetadata����2?/v1/{schema.name=projects/*/locations/*/dataStores/*/schemas/*}:schemaZW2M/v1/{schema.name=projects/*/locations/*/collections/*/dataStores/*/schemas/*}:schema�
DeleteSchema4.google.cloud.discoveryengine.v1.DeleteSchemaRequest.google.longrunning.Operation"��AM
google.protobuf.Empty4google.cloud.discoveryengine.v1.DeleteSchemaMetadata�Aname����*8/v1/{name=projects/*/locations/*/dataStores/*/schemas/*}ZH*F/v1/{name=projects/*/locations/*/collections/*/dataStores/*/schemas/*}R�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.discoveryengine.v1BSchemaServiceProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

