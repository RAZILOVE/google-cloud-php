<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/attached_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of a proxy config.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AttachedProxyConfig</code>
 */
class AttachedProxyConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The Kubernetes Secret resource that contains the HTTP(S) proxy
     * configuration. The secret must be a JSON encoded proxy configuration
     * as described in
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.KubernetesSecret kubernetes_secret = 1;</code>
     */
    protected $kubernetes_secret = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeMultiCloud\V1\KubernetesSecret $kubernetes_secret
     *           The Kubernetes Secret resource that contains the HTTP(S) proxy
     *           configuration. The secret must be a JSON encoded proxy configuration
     *           as described in
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AttachedResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The Kubernetes Secret resource that contains the HTTP(S) proxy
     * configuration. The secret must be a JSON encoded proxy configuration
     * as described in
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.KubernetesSecret kubernetes_secret = 1;</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\KubernetesSecret|null
     */
    public function getKubernetesSecret()
    {
        return $this->kubernetes_secret;
    }

    public function hasKubernetesSecret()
    {
        return isset($this->kubernetes_secret);
    }

    public function clearKubernetesSecret()
    {
        unset($this->kubernetes_secret);
    }

    /**
     * The Kubernetes Secret resource that contains the HTTP(S) proxy
     * configuration. The secret must be a JSON encoded proxy configuration
     * as described in
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.KubernetesSecret kubernetes_secret = 1;</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\KubernetesSecret $var
     * @return $this
     */
    public function setKubernetesSecret($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\KubernetesSecret::class);
        $this->kubernetes_secret = $var;

        return $this;
    }

}

