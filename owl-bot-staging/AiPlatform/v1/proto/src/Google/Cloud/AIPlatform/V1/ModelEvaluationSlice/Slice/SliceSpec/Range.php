<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_evaluation_slice.proto

namespace Google\Cloud\AIPlatform\V1\ModelEvaluationSlice\Slice\SliceSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A range of values for slice(s).
 * `low` is inclusive, `high` is exclusive.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelEvaluationSlice.Slice.SliceSpec.Range</code>
 */
class Range extends \Google\Protobuf\Internal\Message
{
    /**
     * Inclusive low value for the range.
     *
     * Generated from protobuf field <code>float low = 1;</code>
     */
    protected $low = 0.0;
    /**
     * Exclusive high value for the range.
     *
     * Generated from protobuf field <code>float high = 2;</code>
     */
    protected $high = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $low
     *           Inclusive low value for the range.
     *     @type float $high
     *           Exclusive high value for the range.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelEvaluationSlice::initOnce();
        parent::__construct($data);
    }

    /**
     * Inclusive low value for the range.
     *
     * Generated from protobuf field <code>float low = 1;</code>
     * @return float
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Inclusive low value for the range.
     *
     * Generated from protobuf field <code>float low = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setLow($var)
    {
        GPBUtil::checkFloat($var);
        $this->low = $var;

        return $this;
    }

    /**
     * Exclusive high value for the range.
     *
     * Generated from protobuf field <code>float high = 2;</code>
     * @return float
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Exclusive high value for the range.
     *
     * Generated from protobuf field <code>float high = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setHigh($var)
    {
        GPBUtil::checkFloat($var);
        $this->high = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Range::class, \Google\Cloud\AIPlatform\V1\ModelEvaluationSlice_Slice_SliceSpec_Range::class);

