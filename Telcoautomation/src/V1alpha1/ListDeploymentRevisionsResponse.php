<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1alpha1/telcoautomation.proto

namespace Google\Cloud\Telcoautomation\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List of deployment revisions for a given deployment.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1alpha1.ListDeploymentRevisionsResponse</code>
 */
class ListDeploymentRevisionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The revisions of the deployment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1alpha1.Deployment deployments = 1;</code>
     */
    private $deployments;
    /**
     * A token that can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Telcoautomation\V1alpha1\Deployment>|\Google\Protobuf\Internal\RepeatedField $deployments
     *           The revisions of the deployment.
     *     @type string $next_page_token
     *           A token that can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1Alpha1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * The revisions of the deployment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1alpha1.Deployment deployments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeployments()
    {
        return $this->deployments;
    }

    /**
     * The revisions of the deployment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.telcoautomation.v1alpha1.Deployment deployments = 1;</code>
     * @param array<\Google\Cloud\Telcoautomation\V1alpha1\Deployment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeployments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Telcoautomation\V1alpha1\Deployment::class);
        $this->deployments = $arr;

        return $this;
    }

    /**
     * A token that can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token that can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

