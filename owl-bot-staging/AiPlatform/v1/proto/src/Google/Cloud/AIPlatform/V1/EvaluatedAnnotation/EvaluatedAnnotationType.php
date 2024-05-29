<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluated_annotation.proto

namespace Google\Cloud\AIPlatform\V1\EvaluatedAnnotation;

use UnexpectedValueException;

/**
 * Describes the type of the EvaluatedAnnotation. The type is determined
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.EvaluatedAnnotation.EvaluatedAnnotationType</code>
 */
class EvaluatedAnnotationType
{
    /**
     * Invalid value.
     *
     * Generated from protobuf enum <code>EVALUATED_ANNOTATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const EVALUATED_ANNOTATION_TYPE_UNSPECIFIED = 0;
    /**
     * The EvaluatedAnnotation is a true positive. It has a prediction created
     * by the Model and a ground truth Annotation which the prediction matches.
     *
     * Generated from protobuf enum <code>TRUE_POSITIVE = 1;</code>
     */
    const TRUE_POSITIVE = 1;
    /**
     * The EvaluatedAnnotation is false positive. It has a prediction created by
     * the Model which does not match any ground truth annotation.
     *
     * Generated from protobuf enum <code>FALSE_POSITIVE = 2;</code>
     */
    const FALSE_POSITIVE = 2;
    /**
     * The EvaluatedAnnotation is false negative. It has a ground truth
     * annotation which is not matched by any of the model created predictions.
     *
     * Generated from protobuf enum <code>FALSE_NEGATIVE = 3;</code>
     */
    const FALSE_NEGATIVE = 3;

    private static $valueToName = [
        self::EVALUATED_ANNOTATION_TYPE_UNSPECIFIED => 'EVALUATED_ANNOTATION_TYPE_UNSPECIFIED',
        self::TRUE_POSITIVE => 'TRUE_POSITIVE',
        self::FALSE_POSITIVE => 'FALSE_POSITIVE',
        self::FALSE_NEGATIVE => 'FALSE_NEGATIVE',
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
class_alias(EvaluatedAnnotationType::class, \Google\Cloud\AIPlatform\V1\EvaluatedAnnotation_EvaluatedAnnotationType::class);

