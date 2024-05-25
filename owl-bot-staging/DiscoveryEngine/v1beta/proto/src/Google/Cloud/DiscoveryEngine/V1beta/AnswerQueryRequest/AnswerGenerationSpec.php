<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Answer generation specification.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec</code>
 */
class AnswerGenerationSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Answer generation model specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec.ModelSpec model_spec = 1;</code>
     */
    protected $model_spec = null;
    /**
     * Answer generation prompt specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec.PromptSpec prompt_spec = 2;</code>
     */
    protected $prompt_spec = null;
    /**
     * Specifies whether to include citation metadata in the answer. The default
     * value is `false`.
     *
     * Generated from protobuf field <code>bool include_citations = 3;</code>
     */
    protected $include_citations = false;
    /**
     * Language code for Answer. Use language tags defined by
     * [BCP47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     * Note: This is an experimental feature.
     *
     * Generated from protobuf field <code>string answer_language_code = 4;</code>
     */
    protected $answer_language_code = '';
    /**
     * Specifies whether to filter out adversarial queries. The default value
     * is `false`.
     * Google employs search-query classification to detect adversarial
     * queries. No answer is returned if the search query is classified as an
     * adversarial query. For example, a user might ask a question regarding
     * negative comments about the company or submit a query designed to
     * generate unsafe, policy-violating output. If this field is set to
     * `true`, we skip generating answers for adversarial queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_adversarial_query = 5;</code>
     */
    protected $ignore_adversarial_query = false;
    /**
     * Specifies whether to filter out queries that are not answer-seeking.
     * The default value is `false`.
     * Google employs search-query classification to detect answer-seeking
     * queries. No answer is returned if the search query is classified as a
     * non-answer seeking query. If this field is set to `true`, we skip
     * generating answers for non-answer seeking queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_non_answer_seeking_query = 6;</code>
     */
    protected $ignore_non_answer_seeking_query = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec\ModelSpec $model_spec
     *           Answer generation model specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec\PromptSpec $prompt_spec
     *           Answer generation prompt specification.
     *     @type bool $include_citations
     *           Specifies whether to include citation metadata in the answer. The default
     *           value is `false`.
     *     @type string $answer_language_code
     *           Language code for Answer. Use language tags defined by
     *           [BCP47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     *           Note: This is an experimental feature.
     *     @type bool $ignore_adversarial_query
     *           Specifies whether to filter out adversarial queries. The default value
     *           is `false`.
     *           Google employs search-query classification to detect adversarial
     *           queries. No answer is returned if the search query is classified as an
     *           adversarial query. For example, a user might ask a question regarding
     *           negative comments about the company or submit a query designed to
     *           generate unsafe, policy-violating output. If this field is set to
     *           `true`, we skip generating answers for adversarial queries and return
     *           fallback messages instead.
     *     @type bool $ignore_non_answer_seeking_query
     *           Specifies whether to filter out queries that are not answer-seeking.
     *           The default value is `false`.
     *           Google employs search-query classification to detect answer-seeking
     *           queries. No answer is returned if the search query is classified as a
     *           non-answer seeking query. If this field is set to `true`, we skip
     *           generating answers for non-answer seeking queries and return
     *           fallback messages instead.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Answer generation model specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec.ModelSpec model_spec = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec\ModelSpec|null
     */
    public function getModelSpec()
    {
        return $this->model_spec;
    }

    public function hasModelSpec()
    {
        return isset($this->model_spec);
    }

    public function clearModelSpec()
    {
        unset($this->model_spec);
    }

    /**
     * Answer generation model specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec.ModelSpec model_spec = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec\ModelSpec $var
     * @return $this
     */
    public function setModelSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec\ModelSpec::class);
        $this->model_spec = $var;

        return $this;
    }

    /**
     * Answer generation prompt specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec.PromptSpec prompt_spec = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec\PromptSpec|null
     */
    public function getPromptSpec()
    {
        return $this->prompt_spec;
    }

    public function hasPromptSpec()
    {
        return isset($this->prompt_spec);
    }

    public function clearPromptSpec()
    {
        unset($this->prompt_spec);
    }

    /**
     * Answer generation prompt specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.AnswerGenerationSpec.PromptSpec prompt_spec = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec\PromptSpec $var
     * @return $this
     */
    public function setPromptSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\AnswerGenerationSpec\PromptSpec::class);
        $this->prompt_spec = $var;

        return $this;
    }

    /**
     * Specifies whether to include citation metadata in the answer. The default
     * value is `false`.
     *
     * Generated from protobuf field <code>bool include_citations = 3;</code>
     * @return bool
     */
    public function getIncludeCitations()
    {
        return $this->include_citations;
    }

    /**
     * Specifies whether to include citation metadata in the answer. The default
     * value is `false`.
     *
     * Generated from protobuf field <code>bool include_citations = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeCitations($var)
    {
        GPBUtil::checkBool($var);
        $this->include_citations = $var;

        return $this;
    }

    /**
     * Language code for Answer. Use language tags defined by
     * [BCP47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     * Note: This is an experimental feature.
     *
     * Generated from protobuf field <code>string answer_language_code = 4;</code>
     * @return string
     */
    public function getAnswerLanguageCode()
    {
        return $this->answer_language_code;
    }

    /**
     * Language code for Answer. Use language tags defined by
     * [BCP47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     * Note: This is an experimental feature.
     *
     * Generated from protobuf field <code>string answer_language_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_language_code = $var;

        return $this;
    }

    /**
     * Specifies whether to filter out adversarial queries. The default value
     * is `false`.
     * Google employs search-query classification to detect adversarial
     * queries. No answer is returned if the search query is classified as an
     * adversarial query. For example, a user might ask a question regarding
     * negative comments about the company or submit a query designed to
     * generate unsafe, policy-violating output. If this field is set to
     * `true`, we skip generating answers for adversarial queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_adversarial_query = 5;</code>
     * @return bool
     */
    public function getIgnoreAdversarialQuery()
    {
        return $this->ignore_adversarial_query;
    }

    /**
     * Specifies whether to filter out adversarial queries. The default value
     * is `false`.
     * Google employs search-query classification to detect adversarial
     * queries. No answer is returned if the search query is classified as an
     * adversarial query. For example, a user might ask a question regarding
     * negative comments about the company or submit a query designed to
     * generate unsafe, policy-violating output. If this field is set to
     * `true`, we skip generating answers for adversarial queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_adversarial_query = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreAdversarialQuery($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_adversarial_query = $var;

        return $this;
    }

    /**
     * Specifies whether to filter out queries that are not answer-seeking.
     * The default value is `false`.
     * Google employs search-query classification to detect answer-seeking
     * queries. No answer is returned if the search query is classified as a
     * non-answer seeking query. If this field is set to `true`, we skip
     * generating answers for non-answer seeking queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_non_answer_seeking_query = 6;</code>
     * @return bool
     */
    public function getIgnoreNonAnswerSeekingQuery()
    {
        return $this->ignore_non_answer_seeking_query;
    }

    /**
     * Specifies whether to filter out queries that are not answer-seeking.
     * The default value is `false`.
     * Google employs search-query classification to detect answer-seeking
     * queries. No answer is returned if the search query is classified as a
     * non-answer seeking query. If this field is set to `true`, we skip
     * generating answers for non-answer seeking queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_non_answer_seeking_query = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreNonAnswerSeekingQuery($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_non_answer_seeking_query = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AnswerGenerationSpec::class, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest_AnswerGenerationSpec::class);

