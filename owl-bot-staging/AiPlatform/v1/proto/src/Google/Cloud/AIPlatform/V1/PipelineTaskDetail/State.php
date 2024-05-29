<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_job.proto

namespace Google\Cloud\AIPlatform\V1\PipelineTaskDetail;

use UnexpectedValueException;

/**
 * Specifies state of TaskExecution
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.PipelineTaskDetail.State</code>
 */
class State
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Specifies pending state for the task.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * Specifies task is being executed.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * Specifies task completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 3;</code>
     */
    const SUCCEEDED = 3;
    /**
     * Specifies Task cancel is in pending state.
     *
     * Generated from protobuf enum <code>CANCEL_PENDING = 4;</code>
     */
    const CANCEL_PENDING = 4;
    /**
     * Specifies task is being cancelled.
     *
     * Generated from protobuf enum <code>CANCELLING = 5;</code>
     */
    const CANCELLING = 5;
    /**
     * Specifies task was cancelled.
     *
     * Generated from protobuf enum <code>CANCELLED = 6;</code>
     */
    const CANCELLED = 6;
    /**
     * Specifies task failed.
     *
     * Generated from protobuf enum <code>FAILED = 7;</code>
     */
    const FAILED = 7;
    /**
     * Specifies task was skipped due to cache hit.
     *
     * Generated from protobuf enum <code>SKIPPED = 8;</code>
     */
    const SKIPPED = 8;
    /**
     * Specifies that the task was not triggered because the task's trigger
     * policy is not satisfied. The trigger policy is specified in the
     * `condition` field of
     * [PipelineJob.pipeline_spec][google.cloud.aiplatform.v1.PipelineJob.pipeline_spec].
     *
     * Generated from protobuf enum <code>NOT_TRIGGERED = 9;</code>
     */
    const NOT_TRIGGERED = 9;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::RUNNING => 'RUNNING',
        self::SUCCEEDED => 'SUCCEEDED',
        self::CANCEL_PENDING => 'CANCEL_PENDING',
        self::CANCELLING => 'CANCELLING',
        self::CANCELLED => 'CANCELLED',
        self::FAILED => 'FAILED',
        self::SKIPPED => 'SKIPPED',
        self::NOT_TRIGGERED => 'NOT_TRIGGERED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\AIPlatform\V1\PipelineTaskDetail_State::class);

