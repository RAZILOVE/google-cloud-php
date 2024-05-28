<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for CreateSession method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.CreateSessionRequest</code>
 */
class CreateSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of parent data store. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The session to create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Session session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $session = null;

    /**
     * @param string                                   $parent  Required. Full resource name of parent data store. Format:
     *                                                          `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *                                                          Please see {@see ConversationalSearchServiceClient::dataStoreName()} for help formatting this field.
     * @param \Google\Cloud\DiscoveryEngine\V1\Session $session Required. The session to create.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1\CreateSessionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\DiscoveryEngine\V1\Session $session): self
    {
        return (new self())
            ->setParent($parent)
            ->setSession($session);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Full resource name of parent data store. Format:
     *           `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *     @type \Google\Cloud\DiscoveryEngine\V1\Session $session
     *           Required. The session to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of parent data store. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Full resource name of parent data store. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The session to create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Session session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Session|null
     */
    public function getSession()
    {
        return $this->session;
    }

    public function hasSession()
    {
        return isset($this->session);
    }

    public function clearSession()
    {
        unset($this->session);
    }

    /**
     * Required. The session to create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Session session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Session $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Session::class);
        $this->session = $var;

        return $this;
    }

}

