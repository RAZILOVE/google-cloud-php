<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1\GenerateContentResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Content filter results for a prompt sent in the request.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GenerateContentResponse.PromptFeedback</code>
 */
class PromptFeedback extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Blocked reason.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerateContentResponse.PromptFeedback.BlockedReason block_reason = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $block_reason = 0;
    /**
     * Output only. Safety ratings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SafetyRating safety_ratings = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $safety_ratings;
    /**
     * Output only. A readable block reason message.
     *
     * Generated from protobuf field <code>string block_reason_message = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $block_reason_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $block_reason
     *           Output only. Blocked reason.
     *     @type array<\Google\Cloud\AIPlatform\V1\SafetyRating>|\Google\Protobuf\Internal\RepeatedField $safety_ratings
     *           Output only. Safety ratings.
     *     @type string $block_reason_message
     *           Output only. A readable block reason message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Blocked reason.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerateContentResponse.PromptFeedback.BlockedReason block_reason = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getBlockReason()
    {
        return $this->block_reason;
    }

    /**
     * Output only. Blocked reason.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerateContentResponse.PromptFeedback.BlockedReason block_reason = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setBlockReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\GenerateContentResponse\PromptFeedback\BlockedReason::class);
        $this->block_reason = $var;

        return $this;
    }

    /**
     * Output only. Safety ratings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SafetyRating safety_ratings = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSafetyRatings()
    {
        return $this->safety_ratings;
    }

    /**
     * Output only. Safety ratings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SafetyRating safety_ratings = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\SafetyRating>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSafetyRatings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\SafetyRating::class);
        $this->safety_ratings = $arr;

        return $this;
    }

    /**
     * Output only. A readable block reason message.
     *
     * Generated from protobuf field <code>string block_reason_message = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getBlockReasonMessage()
    {
        return $this->block_reason_message;
    }

    /**
     * Output only. A readable block reason message.
     *
     * Generated from protobuf field <code>string block_reason_message = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setBlockReasonMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->block_reason_message = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PromptFeedback::class, \Google\Cloud\AIPlatform\V1\GenerateContentResponse_PromptFeedback::class);

