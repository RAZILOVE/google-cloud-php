<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identities of a group-type subject for Azure clusters.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureClusterGroup</code>
 */
class AzureClusterGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the group, e.g. `my-group&#64;domain.com`.
     *
     * Generated from protobuf field <code>string group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $group = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group
     *           Required. The name of the group, e.g. `my-group&#64;domain.com`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the group, e.g. `my-group&#64;domain.com`.
     *
     * Generated from protobuf field <code>string group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Required. The name of the group, e.g. `my-group&#64;domain.com`.
     *
     * Generated from protobuf field <code>string group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

}

