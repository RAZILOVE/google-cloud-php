<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/grounded_generation_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification for the grounding check.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.CheckGroundingSpec</code>
 */
class CheckGroundingSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The threshold (in [0,1]) used for determining whether a fact must be
     * cited for a claim in the answer candidate. Choosing a higher threshold
     * will lead to fewer but very strong citations, while choosing a lower
     * threshold may lead to more but somewhat weaker citations. If unset, the
     * threshold will default to 0.6.
     *
     * Generated from protobuf field <code>optional double citation_threshold = 1;</code>
     */
    protected $citation_threshold = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $citation_threshold
     *           The threshold (in [0,1]) used for determining whether a fact must be
     *           cited for a claim in the answer candidate. Choosing a higher threshold
     *           will lead to fewer but very strong citations, while choosing a lower
     *           threshold may lead to more but somewhat weaker citations. If unset, the
     *           threshold will default to 0.6.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\GroundedGenerationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The threshold (in [0,1]) used for determining whether a fact must be
     * cited for a claim in the answer candidate. Choosing a higher threshold
     * will lead to fewer but very strong citations, while choosing a lower
     * threshold may lead to more but somewhat weaker citations. If unset, the
     * threshold will default to 0.6.
     *
     * Generated from protobuf field <code>optional double citation_threshold = 1;</code>
     * @return float
     */
    public function getCitationThreshold()
    {
        return isset($this->citation_threshold) ? $this->citation_threshold : 0.0;
    }

    public function hasCitationThreshold()
    {
        return isset($this->citation_threshold);
    }

    public function clearCitationThreshold()
    {
        unset($this->citation_threshold);
    }

    /**
     * The threshold (in [0,1]) used for determining whether a fact must be
     * cited for a claim in the answer candidate. Choosing a higher threshold
     * will lead to fewer but very strong citations, while choosing a lower
     * threshold may lead to more but somewhat weaker citations. If unset, the
     * threshold will default to 0.6.
     *
     * Generated from protobuf field <code>optional double citation_threshold = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setCitationThreshold($var)
    {
        GPBUtil::checkDouble($var);
        $this->citation_threshold = $var;

        return $this;
    }

}

