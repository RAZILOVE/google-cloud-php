<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1\ReadTensorboardUsageResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Per month usage data
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ReadTensorboardUsageResponse.PerMonthUsageData</code>
 */
class PerMonthUsageData extends \Google\Protobuf\Internal\Message
{
    /**
     * Usage data for each user in the given month.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ReadTensorboardUsageResponse.PerUserUsageData user_usage_data = 1;</code>
     */
    private $user_usage_data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\ReadTensorboardUsageResponse\PerUserUsageData>|\Google\Protobuf\Internal\RepeatedField $user_usage_data
     *           Usage data for each user in the given month.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Usage data for each user in the given month.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ReadTensorboardUsageResponse.PerUserUsageData user_usage_data = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserUsageData()
    {
        return $this->user_usage_data;
    }

    /**
     * Usage data for each user in the given month.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ReadTensorboardUsageResponse.PerUserUsageData user_usage_data = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\ReadTensorboardUsageResponse\PerUserUsageData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserUsageData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ReadTensorboardUsageResponse\PerUserUsageData::class);
        $this->user_usage_data = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PerMonthUsageData::class, \Google\Cloud\AIPlatform\V1\ReadTensorboardUsageResponse_PerMonthUsageData::class);

