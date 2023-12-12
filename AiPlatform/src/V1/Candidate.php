<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response candidate generated from the model.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Candidate</code>
 */
class Candidate extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Index of the candidate.
     *
     * Generated from protobuf field <code>int32 index = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $index = 0;
    /**
     * Output only. Content parts of the candidate.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Content content = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $content = null;
    /**
     * Output only. The reason why the model stopped generating tokens.
     * If empty, the model has not stopped generating the tokens.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Candidate.FinishReason finish_reason = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $finish_reason = 0;
    /**
     * Output only. List of ratings for the safety of a response candidate.
     * There is at most one rating per category.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SafetyRating safety_ratings = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $safety_ratings;
    /**
     * Output only. Describes the reason the mode stopped generating tokens in
     * more detail. This is only filled when `finish_reason` is set.
     *
     * Generated from protobuf field <code>optional string finish_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $finish_message = null;
    /**
     * Output only. Source attribution of the generated content.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CitationMetadata citation_metadata = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $citation_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $index
     *           Output only. Index of the candidate.
     *     @type \Google\Cloud\AIPlatform\V1\Content $content
     *           Output only. Content parts of the candidate.
     *     @type int $finish_reason
     *           Output only. The reason why the model stopped generating tokens.
     *           If empty, the model has not stopped generating the tokens.
     *     @type array<\Google\Cloud\AIPlatform\V1\SafetyRating>|\Google\Protobuf\Internal\RepeatedField $safety_ratings
     *           Output only. List of ratings for the safety of a response candidate.
     *           There is at most one rating per category.
     *     @type string $finish_message
     *           Output only. Describes the reason the mode stopped generating tokens in
     *           more detail. This is only filled when `finish_reason` is set.
     *     @type \Google\Cloud\AIPlatform\V1\CitationMetadata $citation_metadata
     *           Output only. Source attribution of the generated content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Index of the candidate.
     *
     * Generated from protobuf field <code>int32 index = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Output only. Index of the candidate.
     *
     * Generated from protobuf field <code>int32 index = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Output only. Content parts of the candidate.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Content content = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\Content|null
     */
    public function getContent()
    {
        return $this->content;
    }

    public function hasContent()
    {
        return isset($this->content);
    }

    public function clearContent()
    {
        unset($this->content);
    }

    /**
     * Output only. Content parts of the candidate.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Content content = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\Content $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Content::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Output only. The reason why the model stopped generating tokens.
     * If empty, the model has not stopped generating the tokens.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Candidate.FinishReason finish_reason = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFinishReason()
    {
        return $this->finish_reason;
    }

    /**
     * Output only. The reason why the model stopped generating tokens.
     * If empty, the model has not stopped generating the tokens.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Candidate.FinishReason finish_reason = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFinishReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Candidate\FinishReason::class);
        $this->finish_reason = $var;

        return $this;
    }

    /**
     * Output only. List of ratings for the safety of a response candidate.
     * There is at most one rating per category.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SafetyRating safety_ratings = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSafetyRatings()
    {
        return $this->safety_ratings;
    }

    /**
     * Output only. List of ratings for the safety of a response candidate.
     * There is at most one rating per category.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SafetyRating safety_ratings = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Describes the reason the mode stopped generating tokens in
     * more detail. This is only filled when `finish_reason` is set.
     *
     * Generated from protobuf field <code>optional string finish_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFinishMessage()
    {
        return isset($this->finish_message) ? $this->finish_message : '';
    }

    public function hasFinishMessage()
    {
        return isset($this->finish_message);
    }

    public function clearFinishMessage()
    {
        unset($this->finish_message);
    }

    /**
     * Output only. Describes the reason the mode stopped generating tokens in
     * more detail. This is only filled when `finish_reason` is set.
     *
     * Generated from protobuf field <code>optional string finish_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFinishMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->finish_message = $var;

        return $this;
    }

    /**
     * Output only. Source attribution of the generated content.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CitationMetadata citation_metadata = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\CitationMetadata|null
     */
    public function getCitationMetadata()
    {
        return $this->citation_metadata;
    }

    public function hasCitationMetadata()
    {
        return isset($this->citation_metadata);
    }

    public function clearCitationMetadata()
    {
        unset($this->citation_metadata);
    }

    /**
     * Output only. Source attribution of the generated content.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CitationMetadata citation_metadata = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\CitationMetadata $var
     * @return $this
     */
    public function setCitationMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\CitationMetadata::class);
        $this->citation_metadata = $var;

        return $this;
    }

}

