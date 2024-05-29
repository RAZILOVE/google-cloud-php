<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_data.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One blob (e.g, image, graph) viewable on a blob metric plot.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.TensorboardBlob</code>
 */
class TensorboardBlob extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. A URI safe key uniquely identifying a blob. Can be used to
     * locate the blob stored in the Cloud Storage bucket of the consumer project.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = '';
    /**
     * Optional. The bytes of the blob is not present unless it's returned by the
     * ReadTensorboardBlobData endpoint.
     *
     * Generated from protobuf field <code>bytes data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Output only. A URI safe key uniquely identifying a blob. Can be used to
     *           locate the blob stored in the Cloud Storage bucket of the consumer project.
     *     @type string $data
     *           Optional. The bytes of the blob is not present unless it's returned by the
     *           ReadTensorboardBlobData endpoint.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardData::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. A URI safe key uniquely identifying a blob. Can be used to
     * locate the blob stored in the Cloud Storage bucket of the consumer project.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. A URI safe key uniquely identifying a blob. Can be used to
     * locate the blob stored in the Cloud Storage bucket of the consumer project.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Optional. The bytes of the blob is not present unless it's returned by the
     * ReadTensorboardBlobData endpoint.
     *
     * Generated from protobuf field <code>bytes data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Optional. The bytes of the blob is not present unless it's returned by the
     * ReadTensorboardBlobData endpoint.
     *
     * Generated from protobuf field <code>bytes data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

