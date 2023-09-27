<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1alpha1/telcoautomation.proto

namespace Google\Cloud\Telcoautomation\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of the cluster management
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1alpha1.ManagementConfig</code>
 */
class ManagementConfig extends \Google\Protobuf\Internal\Message
{
    protected $oneof_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Telcoautomation\V1alpha1\StandardManagementConfig $standard_management_config
     *           Configuration of the standard (GKE) cluster management
     *     @type \Google\Cloud\Telcoautomation\V1alpha1\FullManagementConfig $full_management_config
     *           Configuration of the full (Autopilot) cluster management. Full cluster
     *           management is a preview feature.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1Alpha1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Configuration of the standard (GKE) cluster management
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1alpha1.StandardManagementConfig standard_management_config = 1;</code>
     * @return \Google\Cloud\Telcoautomation\V1alpha1\StandardManagementConfig|null
     */
    public function getStandardManagementConfig()
    {
        return $this->readOneof(1);
    }

    public function hasStandardManagementConfig()
    {
        return $this->hasOneof(1);
    }

    /**
     * Configuration of the standard (GKE) cluster management
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1alpha1.StandardManagementConfig standard_management_config = 1;</code>
     * @param \Google\Cloud\Telcoautomation\V1alpha1\StandardManagementConfig $var
     * @return $this
     */
    public function setStandardManagementConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Telcoautomation\V1alpha1\StandardManagementConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Configuration of the full (Autopilot) cluster management. Full cluster
     * management is a preview feature.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1alpha1.FullManagementConfig full_management_config = 2;</code>
     * @return \Google\Cloud\Telcoautomation\V1alpha1\FullManagementConfig|null
     */
    public function getFullManagementConfig()
    {
        return $this->readOneof(2);
    }

    public function hasFullManagementConfig()
    {
        return $this->hasOneof(2);
    }

    /**
     * Configuration of the full (Autopilot) cluster management. Full cluster
     * management is a preview feature.
     *
     * Generated from protobuf field <code>.google.cloud.telcoautomation.v1alpha1.FullManagementConfig full_management_config = 2;</code>
     * @param \Google\Cloud\Telcoautomation\V1alpha1\FullManagementConfig $var
     * @return $this
     */
    public function setFullManagementConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Telcoautomation\V1alpha1\FullManagementConfig::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOneofConfig()
    {
        return $this->whichOneof("oneof_config");
    }

}

