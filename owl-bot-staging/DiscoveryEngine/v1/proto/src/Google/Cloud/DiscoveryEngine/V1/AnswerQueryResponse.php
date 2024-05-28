<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ConversationalSearchService.AnswerQuery][google.cloud.discoveryengine.v1.ConversationalSearchService.AnswerQuery]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AnswerQueryResponse</code>
 */
class AnswerQueryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Answer resource object.
     * If [AnswerQueryRequest.StepSpec.max_step_count][] is greater than 1,
     * use [Answer.name][google.cloud.discoveryengine.v1.Answer.name] to fetch
     * answer information using
     * [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1.ConversationalSearchService.GetAnswer]
     * API.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer answer = 1;</code>
     */
    protected $answer = null;
    /**
     * Session resource object.
     * It will be only available when session field is set and valid in the
     * [AnswerQueryRequest][google.cloud.discoveryengine.v1.AnswerQueryRequest]
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Session session = 2;</code>
     */
    protected $session = null;
    /**
     * A global unique ID used for logging.
     *
     * Generated from protobuf field <code>string answer_query_token = 3;</code>
     */
    protected $answer_query_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\Answer $answer
     *           Answer resource object.
     *           If [AnswerQueryRequest.StepSpec.max_step_count][] is greater than 1,
     *           use [Answer.name][google.cloud.discoveryengine.v1.Answer.name] to fetch
     *           answer information using
     *           [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1.ConversationalSearchService.GetAnswer]
     *           API.
     *     @type \Google\Cloud\DiscoveryEngine\V1\Session $session
     *           Session resource object.
     *           It will be only available when session field is set and valid in the
     *           [AnswerQueryRequest][google.cloud.discoveryengine.v1.AnswerQueryRequest]
     *           request.
     *     @type string $answer_query_token
     *           A global unique ID used for logging.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Answer resource object.
     * If [AnswerQueryRequest.StepSpec.max_step_count][] is greater than 1,
     * use [Answer.name][google.cloud.discoveryengine.v1.Answer.name] to fetch
     * answer information using
     * [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1.ConversationalSearchService.GetAnswer]
     * API.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer answer = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Answer|null
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    public function hasAnswer()
    {
        return isset($this->answer);
    }

    public function clearAnswer()
    {
        unset($this->answer);
    }

    /**
     * Answer resource object.
     * If [AnswerQueryRequest.StepSpec.max_step_count][] is greater than 1,
     * use [Answer.name][google.cloud.discoveryengine.v1.Answer.name] to fetch
     * answer information using
     * [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1.ConversationalSearchService.GetAnswer]
     * API.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer answer = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Answer $var
     * @return $this
     */
    public function setAnswer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Answer::class);
        $this->answer = $var;

        return $this;
    }

    /**
     * Session resource object.
     * It will be only available when session field is set and valid in the
     * [AnswerQueryRequest][google.cloud.discoveryengine.v1.AnswerQueryRequest]
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Session session = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Session|null
     */
    public function getSession()
    {
        return $this->session;
    }

    public function hasSession()
    {
        return isset($this->session);
    }

    public function clearSession()
    {
        unset($this->session);
    }

    /**
     * Session resource object.
     * It will be only available when session field is set and valid in the
     * [AnswerQueryRequest][google.cloud.discoveryengine.v1.AnswerQueryRequest]
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Session session = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Session $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Session::class);
        $this->session = $var;

        return $this;
    }

    /**
     * A global unique ID used for logging.
     *
     * Generated from protobuf field <code>string answer_query_token = 3;</code>
     * @return string
     */
    public function getAnswerQueryToken()
    {
        return $this->answer_query_token;
    }

    /**
     * A global unique ID used for logging.
     *
     * Generated from protobuf field <code>string answer_query_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerQueryToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_query_token = $var;

        return $this;
    }

}

