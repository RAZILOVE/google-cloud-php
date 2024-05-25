<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A facet result.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchResponse.Facet</code>
 */
class Facet extends \Google\Protobuf\Internal\Message
{
    /**
     * The key for this facet. For example, `"colors"` or `"price"`. It matches
     * [SearchRequest.FacetSpec.FacetKey.key][google.cloud.discoveryengine.v1.SearchRequest.FacetSpec.FacetKey.key].
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    protected $key = '';
    /**
     * The facet values for this field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue values = 2;</code>
     */
    private $values;
    /**
     * Whether the facet is dynamically generated.
     *
     * Generated from protobuf field <code>bool dynamic_facet = 3;</code>
     */
    protected $dynamic_facet = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           The key for this facet. For example, `"colors"` or `"price"`. It matches
     *           [SearchRequest.FacetSpec.FacetKey.key][google.cloud.discoveryengine.v1.SearchRequest.FacetSpec.FacetKey.key].
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\SearchResponse\Facet\FacetValue>|\Google\Protobuf\Internal\RepeatedField $values
     *           The facet values for this field.
     *     @type bool $dynamic_facet
     *           Whether the facet is dynamically generated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The key for this facet. For example, `"colors"` or `"price"`. It matches
     * [SearchRequest.FacetSpec.FacetKey.key][google.cloud.discoveryengine.v1.SearchRequest.FacetSpec.FacetKey.key].
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The key for this facet. For example, `"colors"` or `"price"`. It matches
     * [SearchRequest.FacetSpec.FacetKey.key][google.cloud.discoveryengine.v1.SearchRequest.FacetSpec.FacetKey.key].
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The facet values for this field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The facet values for this field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SearchResponse.Facet.FacetValue values = 2;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\SearchResponse\Facet\FacetValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\SearchResponse\Facet\FacetValue::class);
        $this->values = $arr;

        return $this;
    }

    /**
     * Whether the facet is dynamically generated.
     *
     * Generated from protobuf field <code>bool dynamic_facet = 3;</code>
     * @return bool
     */
    public function getDynamicFacet()
    {
        return $this->dynamic_facet;
    }

    /**
     * Whether the facet is dynamically generated.
     *
     * Generated from protobuf field <code>bool dynamic_facet = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDynamicFacet($var)
    {
        GPBUtil::checkBool($var);
        $this->dynamic_facet = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Facet::class, \Google\Cloud\DiscoveryEngine\V1\SearchResponse_Facet::class);

