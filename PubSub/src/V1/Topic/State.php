<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\Topic;

use UnexpectedValueException;

/**
 * The state of the topic.
 *
 * Protobuf type <code>google.pubsub.v1.Topic.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The topic does not have any persistent errors.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Ingestion from the data source has encountered a permanent error.
     * See the more detailed error state in the corresponding ingestion
     * source configuration.
     *
     * Generated from protobuf enum <code>INGESTION_RESOURCE_ERROR = 2;</code>
     */
    const INGESTION_RESOURCE_ERROR = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::INGESTION_RESOURCE_ERROR => 'INGESTION_RESOURCE_ERROR',
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
class_alias(State::class, \Google\Cloud\PubSub\V1\Topic_State::class);

