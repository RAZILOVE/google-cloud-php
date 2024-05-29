<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [PredictionService.StreamingPredict][google.cloud.aiplatform.v1.PredictionService.StreamingPredict].
 * The first message must contain
 * [endpoint][google.cloud.aiplatform.v1.StreamingPredictRequest.endpoint] field
 * and optionally [input][]. The subsequent messages must contain [input][].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StreamingPredictRequest</code>
 */
class StreamingPredictRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Endpoint requested to serve the prediction.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $endpoint = '';
    /**
     * The prediction input.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tensor inputs = 2;</code>
     */
    private $inputs;
    /**
     * The parameters that govern the prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Tensor parameters = 3;</code>
     */
    protected $parameters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           Required. The name of the Endpoint requested to serve the prediction.
     *           Format:
     *           `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *     @type array<\Google\Cloud\AIPlatform\V1\Tensor>|\Google\Protobuf\Internal\RepeatedField $inputs
     *           The prediction input.
     *     @type \Google\Cloud\AIPlatform\V1\Tensor $parameters
     *           The parameters that govern the prediction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Endpoint requested to serve the prediction.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Required. The name of the Endpoint requested to serve the prediction.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * The prediction input.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tensor inputs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * The prediction input.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tensor inputs = 2;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Tensor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Tensor::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * The parameters that govern the prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Tensor parameters = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\Tensor|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * The parameters that govern the prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Tensor parameters = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\Tensor $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Tensor::class);
        $this->parameters = $var;

        return $this;
    }

}

