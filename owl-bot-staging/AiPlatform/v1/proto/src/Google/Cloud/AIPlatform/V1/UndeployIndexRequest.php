<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_endpoint_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [IndexEndpointService.UndeployIndex][google.cloud.aiplatform.v1.IndexEndpointService.UndeployIndex].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UndeployIndexRequest</code>
 */
class UndeployIndexRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the IndexEndpoint resource from which to undeploy an
     * Index. Format:
     * `projects/{project}/locations/{location}/indexEndpoints/{index_endpoint}`
     *
     * Generated from protobuf field <code>string index_endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $index_endpoint = '';
    /**
     * Required. The ID of the DeployedIndex to be undeployed from the
     * IndexEndpoint.
     *
     * Generated from protobuf field <code>string deployed_index_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $deployed_index_id = '';

    /**
     * @param string $indexEndpoint   Required. The name of the IndexEndpoint resource from which to undeploy an
     *                                Index. Format:
     *                                `projects/{project}/locations/{location}/indexEndpoints/{index_endpoint}`
     *                                Please see {@see IndexEndpointServiceClient::indexEndpointName()} for help formatting this field.
     * @param string $deployedIndexId Required. The ID of the DeployedIndex to be undeployed from the
     *                                IndexEndpoint.
     *
     * @return \Google\Cloud\AIPlatform\V1\UndeployIndexRequest
     *
     * @experimental
     */
    public static function build(string $indexEndpoint, string $deployedIndexId): self
    {
        return (new self())
            ->setIndexEndpoint($indexEndpoint)
            ->setDeployedIndexId($deployedIndexId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $index_endpoint
     *           Required. The name of the IndexEndpoint resource from which to undeploy an
     *           Index. Format:
     *           `projects/{project}/locations/{location}/indexEndpoints/{index_endpoint}`
     *     @type string $deployed_index_id
     *           Required. The ID of the DeployedIndex to be undeployed from the
     *           IndexEndpoint.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexEndpointService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the IndexEndpoint resource from which to undeploy an
     * Index. Format:
     * `projects/{project}/locations/{location}/indexEndpoints/{index_endpoint}`
     *
     * Generated from protobuf field <code>string index_endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getIndexEndpoint()
    {
        return $this->index_endpoint;
    }

    /**
     * Required. The name of the IndexEndpoint resource from which to undeploy an
     * Index. Format:
     * `projects/{project}/locations/{location}/indexEndpoints/{index_endpoint}`
     *
     * Generated from protobuf field <code>string index_endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIndexEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_endpoint = $var;

        return $this;
    }

    /**
     * Required. The ID of the DeployedIndex to be undeployed from the
     * IndexEndpoint.
     *
     * Generated from protobuf field <code>string deployed_index_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDeployedIndexId()
    {
        return $this->deployed_index_id;
    }

    /**
     * Required. The ID of the DeployedIndex to be undeployed from the
     * IndexEndpoint.
     *
     * Generated from protobuf field <code>string deployed_index_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDeployedIndexId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployed_index_id = $var;

        return $this;
    }

}

