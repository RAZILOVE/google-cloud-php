<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/control.proto

namespace Google\Cloud\DiscoveryEngine\V1\Control;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Redirects a shopper to the provided URI.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Control.RedirectAction</code>
 */
class RedirectAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The URI to which the shopper will be redirected.
     * Required.
     * URI must have length equal or less than 2000 characters.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string redirect_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $redirect_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $redirect_uri
     *           Required. The URI to which the shopper will be redirected.
     *           Required.
     *           URI must have length equal or less than 2000 characters.
     *           Otherwise an INVALID ARGUMENT error is thrown.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The URI to which the shopper will be redirected.
     * Required.
     * URI must have length equal or less than 2000 characters.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string redirect_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * Required. The URI to which the shopper will be redirected.
     * Required.
     * URI must have length equal or less than 2000 characters.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string redirect_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRedirectUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->redirect_uri = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RedirectAction::class, \Google\Cloud\DiscoveryEngine\V1\Control_RedirectAction::class);

