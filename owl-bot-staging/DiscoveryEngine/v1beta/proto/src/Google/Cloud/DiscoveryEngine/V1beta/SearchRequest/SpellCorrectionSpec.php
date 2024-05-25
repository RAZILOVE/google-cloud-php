<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The specification for query spell correction.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchRequest.SpellCorrectionSpec</code>
 */
class SpellCorrectionSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The mode under which spell correction should take effect to
     * replace the original search query. Default to
     * [Mode.AUTO][google.cloud.discoveryengine.v1beta.SearchRequest.SpellCorrectionSpec.Mode.AUTO].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchRequest.SpellCorrectionSpec.Mode mode = 1;</code>
     */
    protected $mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mode
     *           The mode under which spell correction should take effect to
     *           replace the original search query. Default to
     *           [Mode.AUTO][google.cloud.discoveryengine.v1beta.SearchRequest.SpellCorrectionSpec.Mode.AUTO].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The mode under which spell correction should take effect to
     * replace the original search query. Default to
     * [Mode.AUTO][google.cloud.discoveryengine.v1beta.SearchRequest.SpellCorrectionSpec.Mode.AUTO].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchRequest.SpellCorrectionSpec.Mode mode = 1;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The mode under which spell correction should take effect to
     * replace the original search query. Default to
     * [Mode.AUTO][google.cloud.discoveryengine.v1beta.SearchRequest.SpellCorrectionSpec.Mode.AUTO].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchRequest.SpellCorrectionSpec.Mode mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\SpellCorrectionSpec\Mode::class);
        $this->mode = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpellCorrectionSpec::class, \Google\Cloud\DiscoveryEngine\V1beta\SearchRequest_SpellCorrectionSpec::class);

