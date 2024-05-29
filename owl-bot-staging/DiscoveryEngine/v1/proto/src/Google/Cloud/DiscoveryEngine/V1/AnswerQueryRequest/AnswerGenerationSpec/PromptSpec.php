<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\AnswerGenerationSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Answer generation prompt specification.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AnswerQueryRequest.AnswerGenerationSpec.PromptSpec</code>
 */
class PromptSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Customized preamble.
     *
     * Generated from protobuf field <code>string preamble = 1;</code>
     */
    protected $preamble = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $preamble
     *           Customized preamble.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Customized preamble.
     *
     * Generated from protobuf field <code>string preamble = 1;</code>
     * @return string
     */
    public function getPreamble()
    {
        return $this->preamble;
    }

    /**
     * Customized preamble.
     *
     * Generated from protobuf field <code>string preamble = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPreamble($var)
    {
        GPBUtil::checkString($var, True);
        $this->preamble = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PromptSpec::class, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest_AnswerGenerationSpec_PromptSpec::class);

