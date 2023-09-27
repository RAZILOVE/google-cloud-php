<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1alpha1/telcoautomation.proto

namespace Google\Cloud\Telcoautomation\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for requesting list of OrchestrationClusters.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1alpha1.ListOrchestrationClustersRequest</code>
 */
class ListOrchestrationClustersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent value for ListOrchestrationClustersRequest
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Requested page size. Server may return fewer items than requested.
     * If unspecified, server will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Filtering results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';
    /**
     * Hint for how to order the results.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. Parent value for ListOrchestrationClustersRequest
     *                       Please see {@see TelcoAutomationClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Telcoautomation\V1alpha1\ListOrchestrationClustersRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent value for ListOrchestrationClustersRequest
     *     @type int $page_size
     *           Requested page size. Server may return fewer items than requested.
     *           If unspecified, server will pick an appropriate default.
     *     @type string $page_token
     *           A token identifying a page of results the server should return.
     *     @type string $filter
     *           Filtering results.
     *     @type string $order_by
     *           Hint for how to order the results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1Alpha1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent value for ListOrchestrationClustersRequest
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent value for ListOrchestrationClustersRequest
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Requested page size. Server may return fewer items than requested.
     * If unspecified, server will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested page size. Server may return fewer items than requested.
     * If unspecified, server will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Filtering results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filtering results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Hint for how to order the results.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Hint for how to order the results.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

