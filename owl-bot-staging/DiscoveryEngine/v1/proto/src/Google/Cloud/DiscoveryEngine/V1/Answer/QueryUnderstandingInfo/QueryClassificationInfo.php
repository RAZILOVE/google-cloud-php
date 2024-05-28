<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Query classification information.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo.QueryClassificationInfo</code>
 */
class QueryClassificationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Query classification type.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo.QueryClassificationInfo.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * Classification output.
     *
     * Generated from protobuf field <code>bool positive = 2;</code>
     */
    protected $positive = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Query classification type.
     *     @type bool $positive
     *           Classification output.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Answer::initOnce();
        parent::__construct($data);
    }

    /**
     * Query classification type.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo.QueryClassificationInfo.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Query classification type.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo.QueryClassificationInfo.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo\QueryClassificationInfo\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Classification output.
     *
     * Generated from protobuf field <code>bool positive = 2;</code>
     * @return bool
     */
    public function getPositive()
    {
        return $this->positive;
    }

    /**
     * Classification output.
     *
     * Generated from protobuf field <code>bool positive = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setPositive($var)
    {
        GPBUtil::checkBool($var);
        $this->positive = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryClassificationInfo::class, \Google\Cloud\DiscoveryEngine\V1\Answer_QueryUnderstandingInfo_QueryClassificationInfo::class);

