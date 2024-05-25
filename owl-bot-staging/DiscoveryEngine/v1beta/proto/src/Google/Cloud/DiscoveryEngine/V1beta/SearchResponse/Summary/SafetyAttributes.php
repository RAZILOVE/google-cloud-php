<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Safety Attribute categories and their associated confidence scores.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SafetyAttributes</code>
 */
class SafetyAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The display names of Safety Attribute categories associated with the
     * generated content. Order matches the Scores.
     *
     * Generated from protobuf field <code>repeated string categories = 1;</code>
     */
    private $categories;
    /**
     * The confidence scores of the each category, higher
     * value means higher confidence. Order matches the Categories.
     *
     * Generated from protobuf field <code>repeated float scores = 2;</code>
     */
    private $scores;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $categories
     *           The display names of Safety Attribute categories associated with the
     *           generated content. Order matches the Scores.
     *     @type array<float>|\Google\Protobuf\Internal\RepeatedField $scores
     *           The confidence scores of the each category, higher
     *           value means higher confidence. Order matches the Categories.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The display names of Safety Attribute categories associated with the
     * generated content. Order matches the Scores.
     *
     * Generated from protobuf field <code>repeated string categories = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * The display names of Safety Attribute categories associated with the
     * generated content. Order matches the Scores.
     *
     * Generated from protobuf field <code>repeated string categories = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->categories = $arr;

        return $this;
    }

    /**
     * The confidence scores of the each category, higher
     * value means higher confidence. Order matches the Categories.
     *
     * Generated from protobuf field <code>repeated float scores = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * The confidence scores of the each category, higher
     * value means higher confidence. Order matches the Categories.
     *
     * Generated from protobuf field <code>repeated float scores = 2;</code>
     * @param array<float>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->scores = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SafetyAttributes::class, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse_Summary_SafetyAttributes::class);

