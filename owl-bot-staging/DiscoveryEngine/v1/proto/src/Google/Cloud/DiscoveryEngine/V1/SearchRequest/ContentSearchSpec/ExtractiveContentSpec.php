<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A specification for configuring the extractive content in a search
 * response.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ExtractiveContentSpec</code>
 */
class ExtractiveContentSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The maximum number of extractive answers returned in each search
     * result.
     * An extractive answer is a verbatim answer extracted from the original
     * document, which provides a precise and contextually relevant answer to
     * the search query.
     * If the number of matching answers is less than the
     * `max_extractive_answer_count`, return all of the answers. Otherwise,
     * return the `max_extractive_answer_count`.
     * At most five answers are returned for each
     * [SearchResult][google.cloud.discoveryengine.v1.SearchResponse.SearchResult].
     *
     * Generated from protobuf field <code>int32 max_extractive_answer_count = 1;</code>
     */
    protected $max_extractive_answer_count = 0;
    /**
     * The max number of extractive segments returned in each search result.
     * Only applied if the
     * [DataStore][google.cloud.discoveryengine.v1.DataStore] is set to
     * [DataStore.ContentConfig.CONTENT_REQUIRED][google.cloud.discoveryengine.v1.DataStore.ContentConfig.CONTENT_REQUIRED]
     * or
     * [DataStore.solution_types][google.cloud.discoveryengine.v1.DataStore.solution_types]
     * is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     * An extractive segment is a text segment extracted from the original
     * document that is relevant to the search query, and, in general, more
     * verbose than an extractive answer. The segment could then be used as
     * input for LLMs to generate summaries and answers.
     * If the number of matching segments is less than
     * `max_extractive_segment_count`, return all of the segments. Otherwise,
     * return the `max_extractive_segment_count`.
     *
     * Generated from protobuf field <code>int32 max_extractive_segment_count = 2;</code>
     */
    protected $max_extractive_segment_count = 0;
    /**
     * Specifies whether to return the confidence score from the extractive
     * segments in each search result. This feature is available only for new
     * or allowlisted data stores. To allowlist your data store,
     * contact your Customer Engineer. The default value is `false`.
     *
     * Generated from protobuf field <code>bool return_extractive_segment_score = 3;</code>
     */
    protected $return_extractive_segment_score = false;
    /**
     * Specifies whether to also include the adjacent from each selected
     * segments.
     * Return at most `num_previous_segments` segments before each selected
     * segments.
     *
     * Generated from protobuf field <code>int32 num_previous_segments = 4;</code>
     */
    protected $num_previous_segments = 0;
    /**
     * Return at most `num_next_segments` segments after each selected
     * segments.
     *
     * Generated from protobuf field <code>int32 num_next_segments = 5;</code>
     */
    protected $num_next_segments = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_extractive_answer_count
     *           The maximum number of extractive answers returned in each search
     *           result.
     *           An extractive answer is a verbatim answer extracted from the original
     *           document, which provides a precise and contextually relevant answer to
     *           the search query.
     *           If the number of matching answers is less than the
     *           `max_extractive_answer_count`, return all of the answers. Otherwise,
     *           return the `max_extractive_answer_count`.
     *           At most five answers are returned for each
     *           [SearchResult][google.cloud.discoveryengine.v1.SearchResponse.SearchResult].
     *     @type int $max_extractive_segment_count
     *           The max number of extractive segments returned in each search result.
     *           Only applied if the
     *           [DataStore][google.cloud.discoveryengine.v1.DataStore] is set to
     *           [DataStore.ContentConfig.CONTENT_REQUIRED][google.cloud.discoveryengine.v1.DataStore.ContentConfig.CONTENT_REQUIRED]
     *           or
     *           [DataStore.solution_types][google.cloud.discoveryengine.v1.DataStore.solution_types]
     *           is
     *           [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     *           An extractive segment is a text segment extracted from the original
     *           document that is relevant to the search query, and, in general, more
     *           verbose than an extractive answer. The segment could then be used as
     *           input for LLMs to generate summaries and answers.
     *           If the number of matching segments is less than
     *           `max_extractive_segment_count`, return all of the segments. Otherwise,
     *           return the `max_extractive_segment_count`.
     *     @type bool $return_extractive_segment_score
     *           Specifies whether to return the confidence score from the extractive
     *           segments in each search result. This feature is available only for new
     *           or allowlisted data stores. To allowlist your data store,
     *           contact your Customer Engineer. The default value is `false`.
     *     @type int $num_previous_segments
     *           Specifies whether to also include the adjacent from each selected
     *           segments.
     *           Return at most `num_previous_segments` segments before each selected
     *           segments.
     *     @type int $num_next_segments
     *           Return at most `num_next_segments` segments after each selected
     *           segments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The maximum number of extractive answers returned in each search
     * result.
     * An extractive answer is a verbatim answer extracted from the original
     * document, which provides a precise and contextually relevant answer to
     * the search query.
     * If the number of matching answers is less than the
     * `max_extractive_answer_count`, return all of the answers. Otherwise,
     * return the `max_extractive_answer_count`.
     * At most five answers are returned for each
     * [SearchResult][google.cloud.discoveryengine.v1.SearchResponse.SearchResult].
     *
     * Generated from protobuf field <code>int32 max_extractive_answer_count = 1;</code>
     * @return int
     */
    public function getMaxExtractiveAnswerCount()
    {
        return $this->max_extractive_answer_count;
    }

    /**
     * The maximum number of extractive answers returned in each search
     * result.
     * An extractive answer is a verbatim answer extracted from the original
     * document, which provides a precise and contextually relevant answer to
     * the search query.
     * If the number of matching answers is less than the
     * `max_extractive_answer_count`, return all of the answers. Otherwise,
     * return the `max_extractive_answer_count`.
     * At most five answers are returned for each
     * [SearchResult][google.cloud.discoveryengine.v1.SearchResponse.SearchResult].
     *
     * Generated from protobuf field <code>int32 max_extractive_answer_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxExtractiveAnswerCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_extractive_answer_count = $var;

        return $this;
    }

    /**
     * The max number of extractive segments returned in each search result.
     * Only applied if the
     * [DataStore][google.cloud.discoveryengine.v1.DataStore] is set to
     * [DataStore.ContentConfig.CONTENT_REQUIRED][google.cloud.discoveryengine.v1.DataStore.ContentConfig.CONTENT_REQUIRED]
     * or
     * [DataStore.solution_types][google.cloud.discoveryengine.v1.DataStore.solution_types]
     * is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     * An extractive segment is a text segment extracted from the original
     * document that is relevant to the search query, and, in general, more
     * verbose than an extractive answer. The segment could then be used as
     * input for LLMs to generate summaries and answers.
     * If the number of matching segments is less than
     * `max_extractive_segment_count`, return all of the segments. Otherwise,
     * return the `max_extractive_segment_count`.
     *
     * Generated from protobuf field <code>int32 max_extractive_segment_count = 2;</code>
     * @return int
     */
    public function getMaxExtractiveSegmentCount()
    {
        return $this->max_extractive_segment_count;
    }

    /**
     * The max number of extractive segments returned in each search result.
     * Only applied if the
     * [DataStore][google.cloud.discoveryengine.v1.DataStore] is set to
     * [DataStore.ContentConfig.CONTENT_REQUIRED][google.cloud.discoveryengine.v1.DataStore.ContentConfig.CONTENT_REQUIRED]
     * or
     * [DataStore.solution_types][google.cloud.discoveryengine.v1.DataStore.solution_types]
     * is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     * An extractive segment is a text segment extracted from the original
     * document that is relevant to the search query, and, in general, more
     * verbose than an extractive answer. The segment could then be used as
     * input for LLMs to generate summaries and answers.
     * If the number of matching segments is less than
     * `max_extractive_segment_count`, return all of the segments. Otherwise,
     * return the `max_extractive_segment_count`.
     *
     * Generated from protobuf field <code>int32 max_extractive_segment_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxExtractiveSegmentCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_extractive_segment_count = $var;

        return $this;
    }

    /**
     * Specifies whether to return the confidence score from the extractive
     * segments in each search result. This feature is available only for new
     * or allowlisted data stores. To allowlist your data store,
     * contact your Customer Engineer. The default value is `false`.
     *
     * Generated from protobuf field <code>bool return_extractive_segment_score = 3;</code>
     * @return bool
     */
    public function getReturnExtractiveSegmentScore()
    {
        return $this->return_extractive_segment_score;
    }

    /**
     * Specifies whether to return the confidence score from the extractive
     * segments in each search result. This feature is available only for new
     * or allowlisted data stores. To allowlist your data store,
     * contact your Customer Engineer. The default value is `false`.
     *
     * Generated from protobuf field <code>bool return_extractive_segment_score = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnExtractiveSegmentScore($var)
    {
        GPBUtil::checkBool($var);
        $this->return_extractive_segment_score = $var;

        return $this;
    }

    /**
     * Specifies whether to also include the adjacent from each selected
     * segments.
     * Return at most `num_previous_segments` segments before each selected
     * segments.
     *
     * Generated from protobuf field <code>int32 num_previous_segments = 4;</code>
     * @return int
     */
    public function getNumPreviousSegments()
    {
        return $this->num_previous_segments;
    }

    /**
     * Specifies whether to also include the adjacent from each selected
     * segments.
     * Return at most `num_previous_segments` segments before each selected
     * segments.
     *
     * Generated from protobuf field <code>int32 num_previous_segments = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumPreviousSegments($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_previous_segments = $var;

        return $this;
    }

    /**
     * Return at most `num_next_segments` segments after each selected
     * segments.
     *
     * Generated from protobuf field <code>int32 num_next_segments = 5;</code>
     * @return int
     */
    public function getNumNextSegments()
    {
        return $this->num_next_segments;
    }

    /**
     * Return at most `num_next_segments` segments after each selected
     * segments.
     *
     * Generated from protobuf field <code>int32 num_next_segments = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNumNextSegments($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_next_segments = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExtractiveContentSpec::class, \Google\Cloud\DiscoveryEngine\V1\SearchRequest_ContentSearchSpec_ExtractiveContentSpec::class);

