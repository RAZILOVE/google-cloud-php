<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1\ImportUserEventsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The inline source for the input config for ImportUserEvents method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ImportUserEventsRequest.InlineSource</code>
 */
class InlineSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A list of user events to import. Recommended max of 10k items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.UserEvent user_events = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $user_events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\UserEvent>|\Google\Protobuf\Internal\RepeatedField $user_events
     *           Required. A list of user events to import. Recommended max of 10k items.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A list of user events to import. Recommended max of 10k items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.UserEvent user_events = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserEvents()
    {
        return $this->user_events;
    }

    /**
     * Required. A list of user events to import. Recommended max of 10k items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.UserEvent user_events = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\UserEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\UserEvent::class);
        $this->user_events = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InlineSource::class, \Google\Cloud\DiscoveryEngine\V1\ImportUserEventsRequest_InlineSource::class);

