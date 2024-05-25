<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1\Answer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Citation source.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Answer.CitationSource</code>
 */
class CitationSource extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the citation source.
     *
     * Generated from protobuf field <code>string reference_id = 1;</code>
     */
    protected $reference_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reference_id
     *           ID of the citation source.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Answer::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the citation source.
     *
     * Generated from protobuf field <code>string reference_id = 1;</code>
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }

    /**
     * ID of the citation source.
     *
     * Generated from protobuf field <code>string reference_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CitationSource::class, \Google\Cloud\DiscoveryEngine\V1\Answer_CitationSource::class);

