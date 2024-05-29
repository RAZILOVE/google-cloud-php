<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model.proto

namespace Google\Cloud\AIPlatform\V1\Model\ExportFormat;

use UnexpectedValueException;

/**
 * The Model content that can be exported.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Model.ExportFormat.ExportableContent</code>
 */
class ExportableContent
{
    /**
     * Should not be used.
     *
     * Generated from protobuf enum <code>EXPORTABLE_CONTENT_UNSPECIFIED = 0;</code>
     */
    const EXPORTABLE_CONTENT_UNSPECIFIED = 0;
    /**
     * Model artifact and any of its supported files. Will be exported to the
     * location specified by the `artifactDestination` field of the
     * [ExportModelRequest.output_config][google.cloud.aiplatform.v1.ExportModelRequest.output_config]
     * object.
     *
     * Generated from protobuf enum <code>ARTIFACT = 1;</code>
     */
    const ARTIFACT = 1;
    /**
     * The container image that is to be used when deploying this Model. Will
     * be exported to the location specified by the `imageDestination` field
     * of the
     * [ExportModelRequest.output_config][google.cloud.aiplatform.v1.ExportModelRequest.output_config]
     * object.
     *
     * Generated from protobuf enum <code>IMAGE = 2;</code>
     */
    const IMAGE = 2;

    private static $valueToName = [
        self::EXPORTABLE_CONTENT_UNSPECIFIED => 'EXPORTABLE_CONTENT_UNSPECIFIED',
        self::ARTIFACT => 'ARTIFACT',
        self::IMAGE => 'IMAGE',
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
class_alias(ExportableContent::class, \Google\Cloud\AIPlatform\V1\Model_ExportFormat_ExportableContent::class);

