<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Query understanding specification.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec</code>
 */
class QueryUnderstandingSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Query classification specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryClassificationSpec query_classification_spec = 1;</code>
     */
    protected $query_classification_spec = null;
    /**
     * Query rephraser specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec query_rephraser_spec = 2;</code>
     */
    protected $query_rephraser_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryClassificationSpec $query_classification_spec
     *           Query classification specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryRephraserSpec $query_rephraser_spec
     *           Query rephraser specification.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Query classification specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryClassificationSpec query_classification_spec = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryClassificationSpec|null
     */
    public function getQueryClassificationSpec()
    {
        return $this->query_classification_spec;
    }

    public function hasQueryClassificationSpec()
    {
        return isset($this->query_classification_spec);
    }

    public function clearQueryClassificationSpec()
    {
        unset($this->query_classification_spec);
    }

    /**
     * Query classification specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryClassificationSpec query_classification_spec = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryClassificationSpec $var
     * @return $this
     */
    public function setQueryClassificationSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryClassificationSpec::class);
        $this->query_classification_spec = $var;

        return $this;
    }

    /**
     * Query rephraser specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec query_rephraser_spec = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryRephraserSpec|null
     */
    public function getQueryRephraserSpec()
    {
        return $this->query_rephraser_spec;
    }

    public function hasQueryRephraserSpec()
    {
        return isset($this->query_rephraser_spec);
    }

    public function clearQueryRephraserSpec()
    {
        unset($this->query_rephraser_spec);
    }

    /**
     * Query rephraser specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec query_rephraser_spec = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryRephraserSpec $var
     * @return $this
     */
    public function setQueryRephraserSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryRephraserSpec::class);
        $this->query_rephraser_spec = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryUnderstandingSpec::class, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest_QueryUnderstandingSpec::class);

