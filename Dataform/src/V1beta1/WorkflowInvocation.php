<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a single invocation of a compilation result.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.WorkflowInvocation</code>
 */
class WorkflowInvocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The workflow invocation's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Immutable. If left unset, a default InvocationConfig will be used.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.InvocationConfig invocation_config = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $invocation_config = null;
    /**
     * Output only. This workflow invocation's current state.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocation.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. This workflow invocation's timing details.
     *
     * Generated from protobuf field <code>.google.type.Interval invocation_timing = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $invocation_timing = null;
    protected $compilation_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The workflow invocation's name.
     *     @type string $compilation_result
     *           Immutable. The name of the compilation result to use for this invocation.
     *           Must be in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;compilationResults/&#42;`.
     *     @type string $workflow_config
     *           Immutable. The name of the workflow config to invoke. Must be in the
     *           format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;workflowConfigs/&#42;`.
     *     @type \Google\Cloud\Dataform\V1beta1\InvocationConfig $invocation_config
     *           Immutable. If left unset, a default InvocationConfig will be used.
     *     @type int $state
     *           Output only. This workflow invocation's current state.
     *     @type \Google\Type\Interval $invocation_timing
     *           Output only. This workflow invocation's timing details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The workflow invocation's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The workflow invocation's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Immutable. The name of the compilation result to use for this invocation.
     * Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;compilationResults/&#42;`.
     *
     * Generated from protobuf field <code>string compilation_result = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCompilationResult()
    {
        return $this->readOneof(2);
    }

    public function hasCompilationResult()
    {
        return $this->hasOneof(2);
    }

    /**
     * Immutable. The name of the compilation result to use for this invocation.
     * Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;compilationResults/&#42;`.
     *
     * Generated from protobuf field <code>string compilation_result = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCompilationResult($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Immutable. The name of the workflow config to invoke. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;workflowConfigs/&#42;`.
     *
     * Generated from protobuf field <code>string workflow_config = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWorkflowConfig()
    {
        return $this->readOneof(6);
    }

    public function hasWorkflowConfig()
    {
        return $this->hasOneof(6);
    }

    /**
     * Immutable. The name of the workflow config to invoke. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;&#47;workflowConfigs/&#42;`.
     *
     * Generated from protobuf field <code>string workflow_config = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Immutable. If left unset, a default InvocationConfig will be used.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.InvocationConfig invocation_config = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\Dataform\V1beta1\InvocationConfig|null
     */
    public function getInvocationConfig()
    {
        return $this->invocation_config;
    }

    public function hasInvocationConfig()
    {
        return isset($this->invocation_config);
    }

    public function clearInvocationConfig()
    {
        unset($this->invocation_config);
    }

    /**
     * Immutable. If left unset, a default InvocationConfig will be used.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.InvocationConfig invocation_config = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\Dataform\V1beta1\InvocationConfig $var
     * @return $this
     */
    public function setInvocationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\InvocationConfig::class);
        $this->invocation_config = $var;

        return $this;
    }

    /**
     * Output only. This workflow invocation's current state.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocation.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. This workflow invocation's current state.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocation.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataform\V1beta1\WorkflowInvocation\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. This workflow invocation's timing details.
     *
     * Generated from protobuf field <code>.google.type.Interval invocation_timing = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Type\Interval|null
     */
    public function getInvocationTiming()
    {
        return $this->invocation_timing;
    }

    public function hasInvocationTiming()
    {
        return isset($this->invocation_timing);
    }

    public function clearInvocationTiming()
    {
        unset($this->invocation_timing);
    }

    /**
     * Output only. This workflow invocation's timing details.
     *
     * Generated from protobuf field <code>.google.type.Interval invocation_timing = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Type\Interval $var
     * @return $this
     */
    public function setInvocationTiming($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Interval::class);
        $this->invocation_timing = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompilationSource()
    {
        return $this->whichOneof("compilation_source");
    }

}

