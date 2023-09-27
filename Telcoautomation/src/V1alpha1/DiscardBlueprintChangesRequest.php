<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1alpha1/telcoautomation.proto

namespace Google\Cloud\Telcoautomation\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request object for `DiscardBlueprintChanges`.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1alpha1.DiscardBlueprintChangesRequest</code>
 */
class DiscardBlueprintChangesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the blueprint of which changes are being discarded.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the blueprint of which changes are being discarded. Please see
     *                     {@see TelcoAutomationClient::blueprintName()} for help formatting this field.
     *
     * @return \Google\Cloud\Telcoautomation\V1alpha1\DiscardBlueprintChangesRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the blueprint of which changes are being discarded.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1Alpha1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the blueprint of which changes are being discarded.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the blueprint of which changes are being discarded.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

