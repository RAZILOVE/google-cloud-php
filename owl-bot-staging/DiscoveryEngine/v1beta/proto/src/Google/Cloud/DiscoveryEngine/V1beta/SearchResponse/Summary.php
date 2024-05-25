<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Summary of the top N search result specified by the summary spec.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchResponse.Summary</code>
 */
class Summary extends \Google\Protobuf\Internal\Message
{
    /**
     * The summary content.
     *
     * Generated from protobuf field <code>string summary_text = 1;</code>
     */
    protected $summary_text = '';
    /**
     * Additional summary-skipped reasons. This provides the reason for ignored
     * cases. If nothing is skipped, this field is not set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SummarySkippedReason summary_skipped_reasons = 2;</code>
     */
    private $summary_skipped_reasons;
    /**
     * A collection of Safety Attribute categories and their associated
     * confidence scores.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SafetyAttributes safety_attributes = 3;</code>
     */
    protected $safety_attributes = null;
    /**
     * Summary with metadata information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SummaryWithMetadata summary_with_metadata = 4;</code>
     */
    protected $summary_with_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $summary_text
     *           The summary content.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $summary_skipped_reasons
     *           Additional summary-skipped reasons. This provides the reason for ignored
     *           cases. If nothing is skipped, this field is not set.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\SafetyAttributes $safety_attributes
     *           A collection of Safety Attribute categories and their associated
     *           confidence scores.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\SummaryWithMetadata $summary_with_metadata
     *           Summary with metadata information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The summary content.
     *
     * Generated from protobuf field <code>string summary_text = 1;</code>
     * @return string
     */
    public function getSummaryText()
    {
        return $this->summary_text;
    }

    /**
     * The summary content.
     *
     * Generated from protobuf field <code>string summary_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSummaryText($var)
    {
        GPBUtil::checkString($var, True);
        $this->summary_text = $var;

        return $this;
    }

    /**
     * Additional summary-skipped reasons. This provides the reason for ignored
     * cases. If nothing is skipped, this field is not set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SummarySkippedReason summary_skipped_reasons = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSummarySkippedReasons()
    {
        return $this->summary_skipped_reasons;
    }

    /**
     * Additional summary-skipped reasons. This provides the reason for ignored
     * cases. If nothing is skipped, this field is not set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SummarySkippedReason summary_skipped_reasons = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSummarySkippedReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\SummarySkippedReason::class);
        $this->summary_skipped_reasons = $arr;

        return $this;
    }

    /**
     * A collection of Safety Attribute categories and their associated
     * confidence scores.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SafetyAttributes safety_attributes = 3;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\SafetyAttributes|null
     */
    public function getSafetyAttributes()
    {
        return $this->safety_attributes;
    }

    public function hasSafetyAttributes()
    {
        return isset($this->safety_attributes);
    }

    public function clearSafetyAttributes()
    {
        unset($this->safety_attributes);
    }

    /**
     * A collection of Safety Attribute categories and their associated
     * confidence scores.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SafetyAttributes safety_attributes = 3;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\SafetyAttributes $var
     * @return $this
     */
    public function setSafetyAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\SafetyAttributes::class);
        $this->safety_attributes = $var;

        return $this;
    }

    /**
     * Summary with metadata information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SummaryWithMetadata summary_with_metadata = 4;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\SummaryWithMetadata|null
     */
    public function getSummaryWithMetadata()
    {
        return $this->summary_with_metadata;
    }

    public function hasSummaryWithMetadata()
    {
        return isset($this->summary_with_metadata);
    }

    public function clearSummaryWithMetadata()
    {
        unset($this->summary_with_metadata);
    }

    /**
     * Summary with metadata information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.Summary.SummaryWithMetadata summary_with_metadata = 4;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\SummaryWithMetadata $var
     * @return $this
     */
    public function setSummaryWithMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\SummaryWithMetadata::class);
        $this->summary_with_metadata = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Summary::class, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse_Summary::class);

