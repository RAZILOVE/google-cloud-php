<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for DeleteSession method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.DeleteSessionRequest</code>
 */
class DeleteSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Session to delete. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The resource name of the Session to delete. Format:
     *                     `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     *                     Please see {@see ConversationalSearchServiceClient::sessionName()} for help formatting this field.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1\DeleteSessionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Session to delete. Format:
     *           `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Session to delete. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Session to delete. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

