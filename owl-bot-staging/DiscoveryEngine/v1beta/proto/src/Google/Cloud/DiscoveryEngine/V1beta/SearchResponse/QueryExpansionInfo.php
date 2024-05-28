<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information describing query expansion including whether expansion has
 * occurred.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchResponse.QueryExpansionInfo</code>
 */
class QueryExpansionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Bool describing whether query expansion has occurred.
     *
     * Generated from protobuf field <code>bool expanded_query = 1;</code>
     */
    protected $expanded_query = false;
    /**
     * Number of pinned results. This field will only be set when expansion
     * happens and
     * [SearchRequest.QueryExpansionSpec.pin_unexpanded_results][google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.pin_unexpanded_results]
     * is set to true.
     *
     * Generated from protobuf field <code>int64 pinned_result_count = 2;</code>
     */
    protected $pinned_result_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $expanded_query
     *           Bool describing whether query expansion has occurred.
     *     @type int|string $pinned_result_count
     *           Number of pinned results. This field will only be set when expansion
     *           happens and
     *           [SearchRequest.QueryExpansionSpec.pin_unexpanded_results][google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.pin_unexpanded_results]
     *           is set to true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Bool describing whether query expansion has occurred.
     *
     * Generated from protobuf field <code>bool expanded_query = 1;</code>
     * @return bool
     */
    public function getExpandedQuery()
    {
        return $this->expanded_query;
    }

    /**
     * Bool describing whether query expansion has occurred.
     *
     * Generated from protobuf field <code>bool expanded_query = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpandedQuery($var)
    {
        GPBUtil::checkBool($var);
        $this->expanded_query = $var;

        return $this;
    }

    /**
     * Number of pinned results. This field will only be set when expansion
     * happens and
     * [SearchRequest.QueryExpansionSpec.pin_unexpanded_results][google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.pin_unexpanded_results]
     * is set to true.
     *
     * Generated from protobuf field <code>int64 pinned_result_count = 2;</code>
     * @return int|string
     */
    public function getPinnedResultCount()
    {
        return $this->pinned_result_count;
    }

    /**
     * Number of pinned results. This field will only be set when expansion
     * happens and
     * [SearchRequest.QueryExpansionSpec.pin_unexpanded_results][google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.pin_unexpanded_results]
     * is set to true.
     *
     * Generated from protobuf field <code>int64 pinned_result_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPinnedResultCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->pinned_result_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryExpansionInfo::class, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse_QueryExpansionInfo::class);

