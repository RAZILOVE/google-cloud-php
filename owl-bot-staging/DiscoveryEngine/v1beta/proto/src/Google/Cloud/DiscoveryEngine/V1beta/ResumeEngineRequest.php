<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/engine_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for resuming training of an engine.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.ResumeEngineRequest</code>
 */
class ResumeEngineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the engine to resume.
     * Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the engine to resume.
     *                     Format:
     *                     `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`
     *                     Please see {@see EngineServiceClient::engineName()} for help formatting this field.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1beta\ResumeEngineRequest
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
     *           Required. The name of the engine to resume.
     *           Format:
     *           `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\EngineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the engine to resume.
     * Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the engine to resume.
     * Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection_id}/engines/{engine_id}`
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

